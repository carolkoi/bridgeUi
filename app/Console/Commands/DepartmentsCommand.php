<?php

namespace App\Console\Commands;

use App\Models\Department;
use Illuminate\Console\Command;
use GuzzleHttp\Client;

class DepartmentsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'departments:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importing departments from HR';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();

        $departmentUrl = 'http://hr-demo.dnsalias.com/api/v1/department';

        $response = json_decode($client->get($departmentUrl, [
            'headers' => [
                'Authorization' => '579f71a768412620a4b6a3284f4406acd385'
            ]
        ])->getBody());

        return collect($response)->each(function ($department) {
            $data = [
                "id" => $department->id,
                "department" => $department->department,
            ];

            Department::updateOrCreate([
                "id" => $department->id,
            ], $data

            );

        });
        $this->info('Departments imported successfully');


    }
}

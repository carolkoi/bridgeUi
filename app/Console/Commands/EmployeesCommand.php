<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Models\User;

class EmployeesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employees:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importing employees from HR';

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

        $employeeUrl = 'http://hr-demo.dnsalias.com/api/v1/employees';

        $response = json_decode($client->get($employeeUrl, [
            'headers' => [
                'Authorization' => '579f71a768412620a4b6a3284f4406acd385'
            ]

        ])->getBody());

        return collect($response)->each(function ($user) {
            $data = [
                "email" => $user->email,
                "password" => bcrypt('password'),
                "first_name" => $user->first_name,
                "last_name" => $user->last_name,
                "middle_name" => $user->middle_name,
                'name' => $user->first_name.' '.$user->last_name,
                "department_id" => $user->department_id,
                "location" => 'Nairobi'
            ];

            User::updateOrCreate([
                "email" => $user->email,
            ], $data

            );

        });
        $this->info('Employees imported successfully');

    }
}

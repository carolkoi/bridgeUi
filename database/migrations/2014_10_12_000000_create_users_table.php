<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name', 45)->nullable()->default(null);
            $table->string('last_name', 45)->nullable()->default(null);
            $table->string('middle_name', 45)->nullable()->default(null);
            $table->string('name', 100)->nullable()->default(null);
            $table->string('email', 45)->nullable()->default(null);
            $table->string('password', 100)->nullable()->default(null);
            $table->integer('department_id')->nullable()->default(null);
            $table->string('location', 45)->nullable()->default(null);
            $table->tinyInteger('ict_staff')->nullable()->default('0');
            $table->string('remember_token', 150)->nullable()->default(null);
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

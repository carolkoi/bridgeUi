<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenanceRecordsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'maintenance_records';

    /**
     * Run the migrations.
     * @table maintenance_records
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('asset_id')->nullable();
            $table->integer('maintenance_schedule_id')->nullable();
            $table->text('asset_details')->nullable();
            $table->text('component_details')->nullable();
            $table->integer('department_id')->nullable();
            $table->date('commission_date')->nullable();
            $table->date('decommission_duration')->nullable();
            $table->date('decommission_reminder')->nullable();
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

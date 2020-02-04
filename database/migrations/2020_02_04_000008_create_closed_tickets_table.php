<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClosedTicketsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'closed_tickets';

    /**
     * Run the migrations.
     * @table closed_tickets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->default(null);
            $table->unsignedInteger('department_id')->nullable()->default(null);
            $table->unsignedInteger('issue_type_id')->nullable()->default(null);
            $table->tinyInteger('business_continuity_impacted')->nullable()->default('0');
            $table->longText('image')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->integer('assign_to')->nullable();
            $table->tinyInteger('surrender_status')->nullable()->default('0');
            $table->tinyInteger('resolved_status')->nullable()->default('0');
            $table->tinyInteger('closed_status')->nullable()->default('0');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name',100);
            $table->integer('client_id');
            $table->string('prepared_by',50);
            $table->dateTime('date_prepared');
            $table->string('checked_by',50);
            $table->dateTime('date_checked');
            $table->string('reviewed_by',50);
            $table->dateTime('date_reviewed');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

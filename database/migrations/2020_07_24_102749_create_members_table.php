<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('element_id');
            $table->string('name',150);
            $table->string('bar_mark',10);
            $table->string('bar_type',10)->nullable();
            $table->string('bar_size',10);
            $table->integer('total_members');
            $table->integer('no_of_bar_in_each');
            $table->integer('total_no_of_bars');
            $table->float('total_length_of_bars');
            $table->string('shape_code',10);
            $table->float('length_a')->nullable();
            $table->float('length_b')->nullable();
            $table->float('length_c')->nullable();
            $table->float('length_d')->nullable();
            $table->float('length_e')->nullable();
            $table->float('length_f')->nullable();
            $table->float('length_r')->nullable();
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
        Schema::dropIfExists('members');
    }
}

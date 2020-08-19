<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbsFormulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbs_formula', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stdcode_id');
            $table->integer('shape_code');
            $table->string('shape',50)->nullable();
            $table->string('formula',50);
            $table->float('d6');
            $table->float('d8');
            $table->float('d10');
            $table->float('d12');
            $table->float('d16');
            $table->float('d20');
            $table->float('d25');
            $table->float('d32');
            $table->float('d40');
            $table->float('d50');
            $table->integer('steel_type_t');
            $table->integer('steel_type_y');
            $table->integer('steel_type_r');
            //$table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bbs_formula');
    }
}

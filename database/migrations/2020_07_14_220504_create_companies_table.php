<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('main_activity',200);
            $table->string('postal_address',100);
            $table->string('email',50);
            $table->string('fax',15);
            $table->string('telephone',15);
            $table->string('website',50);
            $table->string('municipal',50);
            $table->string('region',50);
            $table->string('national',50);
            $table->string('logo_path',100);
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
        Schema::dropIfExists('companies');
    }
}

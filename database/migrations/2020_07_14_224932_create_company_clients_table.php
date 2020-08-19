<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name',100);
            $table->string('postal_address',100);
            $table->string('street_name',50);
            $table->string('municipal',50);
            $table->string('region',50);
            $table->string('nationality',50);
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
        Schema::dropIfExists('company_clients');
    }
}

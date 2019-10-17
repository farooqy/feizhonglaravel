<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanydataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companydata', function (Blueprint $table) {
            $table->increments('comp_id');
            $table->string('comp_name',330);
            $table->string('comp_email', 300);
            $table->string('comp_phone', 50);
            $table->string('comp_pass',300);
            $table->string('comp_logo',300);
            $table->string('comp_token', 330);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companydata');
    }
}

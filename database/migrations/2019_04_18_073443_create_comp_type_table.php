<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comp_type', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('comp_id');
            $table->string('comp_token', 330);
            $table->string('comp_type', 170);
            $table->string('comp_subtype',180);
            $table->string('comp_description');
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
        Schema::dropIfExists('comp_type');
    }
}

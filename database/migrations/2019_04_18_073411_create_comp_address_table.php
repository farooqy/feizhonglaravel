<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comp_address', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('comp_id');
            $table->string('comp_addr_one',330);
            $table->string('comp_addr_two',330)->nullable($value = true);
            $table->string('comp_city', 45);
            $table->string('comp_province', 50);
            $table->string('comp_token',330);
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
        Schema::dropIfExists('comp_address');
    }
}

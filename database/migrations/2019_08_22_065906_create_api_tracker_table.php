<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiTrackerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_tracker', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger("api_id");
            $table->string("api_request_route");
            $table->string("api_host_ipaddress");
            $table->boolean("is_successful_request")->default(false);
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
        Schema::dropIfExists('api_tracker');
    }
}

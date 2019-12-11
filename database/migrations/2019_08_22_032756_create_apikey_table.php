<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApikeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apikey', function (Blueprint $table) {
            $table->increments('api_id');
            $table->integer('api_host_id');
            $table->string('api_host_token');
            $table->string('api_host_type')->default("comp");
            $table->string("phone_serial_number");
            $table->string("phone_model_number");
            $table->string("phone_id_number");
            $table->string("phone_manufacture");
            $table->string("phone_brand");
            $table->string("phone_type");
            $table->string("phone_user");
            $table->string("phone_base");
            $table->string("phone_sdk_version");
            $table->string("phone_host");
            $table->string("phone_fingerprint");
            $table->string("phone_release");
            $table->string("phone_ip_address");
            $table->string("phone_mac_address");
            $table->string('api_key',300);
            $table->boolean('is_expired')->default(false);
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
        Schema::dropIfExists('apikey');
    }
}

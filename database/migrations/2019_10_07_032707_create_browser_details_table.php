<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrowserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browser_details', function (Blueprint $table) {
            $table->increments('api_id');
            $table->integer('api_host_id');
            $table->string('api_host_token');
            $table->string('api_host_type')->default("comp");
            $table->string('os_name');
            $table->string('os_version');
            $table->string('browser_name');
            $table->string('browser_version');
            $table->string('navigator_userAgent');
            $table->string('navigator_appVersion');
            $table->string('navigator_platform');
            $table->string('navigator_vendor');
            $table->string('host_ip_address');
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
        Schema::dropIfExists('browser_details');
    }
}

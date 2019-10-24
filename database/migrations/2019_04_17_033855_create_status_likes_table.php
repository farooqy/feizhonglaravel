<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_likes', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('status_id');
            $table->string('status_token');
            $table->bigInteger('host_id');
            $table->string('host_token');
            $table->string('host_type',10)->default('normal');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('status_likes');
    }
}

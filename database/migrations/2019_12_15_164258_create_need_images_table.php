<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeedImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('need_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('need_id');
            $table->string('need_token', 330);
            $table->string('file_type', 8);
            $table->string('file_url', 330);
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
        Schema::dropIfExists('need_images');
    }
}

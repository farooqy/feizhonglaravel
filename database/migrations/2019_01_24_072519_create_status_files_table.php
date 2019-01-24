<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('status_id');
            $table->string('status_file_type',10)->default('image');
            $table->string('status_file_mime');
            $table->string('status_file_token')->default(hash('MD5', time()));
            $table->string('status_file_url');
            $table->string('status_file_status',10)->default('active');
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
        Schema::dropIfExists('status_files');
    }
}

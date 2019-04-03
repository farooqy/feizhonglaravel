<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUploadedFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_uploaded_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_url');
            $table->boolean('file_is_active')->default(true);
            $table->biginteger('file_uploaded_by_id');
            $table->string('file_uploaded_by_who')->default('company');
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
        Schema::dropIfExists('table_uploaded_files');
    }
}

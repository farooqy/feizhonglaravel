<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('plan_id')->unique();
            $table->string('plan_token', 330);
            $table->string('file_url', 330);
            $table->boolean('file_type'); // 0  = image 1 == video
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
        Schema::dropIfExists('package_uploads');
    }
}

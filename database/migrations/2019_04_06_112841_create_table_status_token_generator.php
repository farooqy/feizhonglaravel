<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStatusTokenGenerator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_token_generator', function (Blueprint $table) {
            $table->increments('id');
            $table->string('generated_token', 330);
            $table->bigInteger('generated_for_id');
            $table->string('generated_for_type',10);
            $table->string('generated_for_token',330);
            $table->boolean('generated_completed')->default(false);
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
        Schema::dropIfExists('status_token_generator');
    }
}

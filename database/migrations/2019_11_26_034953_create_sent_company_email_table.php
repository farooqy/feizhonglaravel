<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentCompanyEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sent_company_email', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email_token', 330);
            $table->string('sent_to', 140);
            $table->string('email_body');
            $table->string("email_type", 35);
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
        Schema::dropIfExists('sent_company_email');
    }
}

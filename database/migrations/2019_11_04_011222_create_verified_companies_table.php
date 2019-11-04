<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerifiedCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verified_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('verification_token',330);
            $table->bigInteger('comp_id');
            $table->string('comp_token',330);
            $table->bigInteger('verified_by_staff_id');
            $table->string('verified_by_staff_token');
            $table->boolean('is_revoked')->default(false);
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
        Schema::dropIfExists('verified_companies');
    }
}

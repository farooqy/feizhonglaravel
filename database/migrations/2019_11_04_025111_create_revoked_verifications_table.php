<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevokedVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revoked_verifications', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('verification_id');
            $table->string('verification_token',330);
            $table->text('revoked_reason',5200);
            $table->bigInteger('revoked_by_staff_id');
            $table->string('revoked_by_staff_token');
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
        Schema::dropIfExists('revoked_verifications');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevokedMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revoked_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('revoked_match_id');
            $table->string('revoked_match_token');
            $table->bigInteger('revoked_by_staff_id');
            $table->string('revoked_by_staff_token');
            $table->text('revoked_reason');
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
        Schema::dropIfExists('revoked_matches');
    }
}

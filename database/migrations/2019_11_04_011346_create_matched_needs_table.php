<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchedNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matched_needs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('match_token',330);
            $table->bigInteger('matched_comp_id');
            $table->string('matched_comp_token',330);
            $table->bigInteger('matched_need_id');
            $table->string('matched_need_token');
            $table->bigInteger('matched_by_staff_id');
            $table->string('matched_by_staff_token');
            $table->boolean('match_revoked');
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
        Schema::dropIfExists('matched_needs');
    }
}

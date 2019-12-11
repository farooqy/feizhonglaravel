<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevokeAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // this holds attachements for revoke reason table
        //for both revoked_matches and revoked_verifications table
        Schema::create('revoke_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('revoke_id');
            $table->string('revoke_token',330);
            $table->string('revoke_type',15);//match or verification
            $table->string('attachment_url');
            $table->string('attachment_media_type');//image or video
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
        Schema::dropIfExists('revoke_attachments');
    }
}

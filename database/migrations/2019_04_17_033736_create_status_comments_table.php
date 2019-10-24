<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment_token');
            $table->bigInteger('status_id');
            $table->string('status_token',330);
            $table->bigInteger('host_id');
            $table->string('host_token', 330);
            $table->string('comment_type',20)->default('status');
            //can be product or comment of a comment (reply to comment)
            $table->longText('comment_text',1000);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('status_comments');
    }
}

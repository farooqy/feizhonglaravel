<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NormalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('normal_user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string("user_fname");
            $table->string("user_sname");
            $table->string("user_email", 75)->unique();
            $table->string("user_phone", 15)->unique();
            $table->string("user_password",300);
            $table->string("user_profile", 300)->default(env("APP_URL")."img/user_icon.jpg");
            $table->string("user_token", 300);
            $table->string("user_status", 15)->default("active");
            $table->boolean("is_verified")->default(false);
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
        //
    }
}

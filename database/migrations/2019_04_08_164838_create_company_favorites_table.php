<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('favorite_host_id');
            $table->string('favorite_host_token',330);
            $table->string('favorite_host_type',15);
            $table->bigInteger('favorited_comp_id');
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
        Schema::dropIfExists('company_favorites');
    }
}

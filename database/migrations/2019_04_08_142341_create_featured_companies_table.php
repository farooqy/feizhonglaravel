<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('featured_for_id');
            $table->string('feature_file_url');
            $table->string('feature_file_type');
            $table->boolean('feature_approved')->default(false);
            $table->string('feature_status', 15)->default('requested');
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
        Schema::dropIfExists('featured_companies');
    }
}

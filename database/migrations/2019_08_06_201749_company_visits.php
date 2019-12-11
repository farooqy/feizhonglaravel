<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyVisits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company_visits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("comp_id");
            $table->string('comp_token', 330);
            $table->integer('host_id');
            $table->string('host_token');
            $table->string('host_type');
            $table->integer("visit_count");
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

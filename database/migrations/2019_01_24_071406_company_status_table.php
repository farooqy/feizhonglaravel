<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('comp_id');
            $table->string('comp_token',300);
            $table->text('status_content',1001)->nullable();
            $table->boolean('has_files')->default(false);
            $table->integer('num_files')->default(0);
            $table->string('status_status',10)->default('active');
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
        Schema::dropIfExists('company_status');
    }
}

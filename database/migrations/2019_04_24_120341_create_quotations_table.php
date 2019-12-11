<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('comp_id');
            $table->string('comp_token',330);
            $table->bigInteger('user_id');
            $table->string('user_token',330);
            $table->string('product_id');
            $table->string('product_token');
            $table->string('quantity');
            $table->string('description',550)->nullable();
            $table->string('product_type',8)->default('product');//can be generated from need that was posted or product 
            $table->string('demand_price'); #user will give his price if he feels
            $table->string('who_initiated',10)->default('comp'); #both users/company can generate quotation
            $table->string('quotation_file',350); #pdf file generated
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
        Schema::dropIfExists('quotations');
    }
}

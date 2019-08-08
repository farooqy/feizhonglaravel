<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("product_id");
            $table->string('product_gen_token', 330);
            $table->integer('host_id');
            $table->string('host_token');
            $table->string('host_type');
            $table->string('visit_type');
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

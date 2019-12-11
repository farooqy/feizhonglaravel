<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_needs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('need_token', 330);
            $table->bigInteger('host_id');
            $table->string('host_token', 330);
            $table->string('host_type', '8')->default('normal');
            $table->string('product_name',330);
            $table->string('product_description',550);
            $table->string('product_type', 45);
            $table->string('product_sub_types', 45);
            $table->integer('product_quantity');
            $table->string('product_measure_unit', 15);
            $table->timestamp('product_valid_until');
            $table->boolean('is_active_need')->default(true);
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
        Schema::dropIfExists('user_needs');
    }
}

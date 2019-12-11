<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreePackagePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_package_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_token', 330);
            $table->bigInteger('comp_id');
            $table->string('comp_token',330);
            $table->bigInteger('setby_staff_id');
            $table->string('setby_staff_token',330);
            $table->boolean('is_active_plan')->default(true);
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
        Schema::dropIfExists('free_package_plan');
    }
}

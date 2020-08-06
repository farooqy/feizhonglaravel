<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierCountryPreferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_country_preference', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('host_id');
            $table->string('host_token');
            $table->integer('host_type');
            $table->integer('prefered_supplier_location')->default(0);
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
        Schema::dropIfExists('supplier_country_preference');
    }
}

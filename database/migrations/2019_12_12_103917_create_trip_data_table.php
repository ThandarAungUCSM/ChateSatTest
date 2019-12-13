<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("pack_name");
            $table->string("pack_description");
            $table->string("pack_type");
            $table->integer("total_credit");
            $table->string("tag_name");
            $table->integer("validity_month");
            $table->double("pack_price");
            $table->boolean("newbie_first_attend");
            $table->integer("newbie_addition_credit");
            $table->string("pack_alias");
            $table->double("estimate_price");
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
        Schema::dropIfExists('trip_data');
    }
}

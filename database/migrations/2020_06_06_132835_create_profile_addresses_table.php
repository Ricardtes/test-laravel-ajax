<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_profile_id')->unsigned();
//            $table->foreign('user_profile_id')->references('id')->on('user_profiles')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');

            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onUpdate('cascade')->onDelete('cascade');

            $table->string('street')->nullable();

            $table->string('house_number')->nullable();
            $table->mediumText('additional_info')->nullable();

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
        Schema::dropIfExists('profile_addresses');
    }
}

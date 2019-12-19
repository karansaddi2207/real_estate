<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();;
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->string('name');
            $table->string('address');
            $table->integer('beds');
            $table->integer('bathrooms');
            $table->string('price');
            $table->string('property_type');
            $table->string('img');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->integer('state_id')->unsigned()->index();
            $table->integer('city_id')->unsigned()->index();
            $table->text('description');
            $table->string('property_space');
            $table->string('property_age');
            $table->integer('air_conditioners')->default(0);
            $table->string('telephone');
            $table->string('suitable_for');
            $table->integer('wifi');
            $table->integer('laundry_room');
            $table->integer('playground');
            $table->integer('kitchen');
            $table->string('parking_space');
            $table->string('transportation');

            $table->Foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->Foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->Foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

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
        Schema::dropIfExists('properties');
    }
}

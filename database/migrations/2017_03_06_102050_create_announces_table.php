<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('genes_id');
            $table->decimal('price',6,2)->nullable();
            $table->string('cover')->default('/images/cars/BMMS1000RR.jpg');
            $table->text('car_condition')->nullable();
            $table->string('car_doors')->nullable();
            $table->string('car_consumption')->nullable();
            $table->string('car_mileage')->nullable();
            $table->string('car_transmission')->nullable();
            $table->integer('colors_id')->nullable();
            $table->integer('car_country')->nullable();
            $table->integer('fuel_type_id')->nullable();
            $table->string('fuel')->nullable();
            $table->boolean('audio_input')->default('0');
            $table->boolean('roof_box')->default('0');
            $table->boolean('cd_player')->default('0');
            $table->boolean('baby_seat')->default('0');
            $table->boolean('power_steering')->default('0');
            $table->boolean('gps_navigator')->default('0');
            $table->boolean('air_conditioning')->default('0');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
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
        Schema::dropIfExists('announces');
    }
}

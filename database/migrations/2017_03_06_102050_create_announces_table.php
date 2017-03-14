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
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->string('gene_id')->nullable();

            $table->string('number_plate')->nullable();
            $table->integer('coutry_id')->nullable();
            $table->string('year',4)->nullable();
            $table->string('seats',3)->nullable();
            $table->string('doors',2)->nullable();
            $table->boolean('transmission')->nullable();
            $table->integer('fuel_type_id')->nullable();
            $table->integer('engine_type_id')->nullable();
            $table->string('mileage')->nullable();

            $table->integer('color_id')->nullable();

            $table->text('description')->nullable();

            // $table->string('cover')->default('/images/cars/BMMS1000RR.jpg');

            $table->text('condition')->nullable();

            $table->integer('booking_lead_time')->nullable();
            $table->string('pick_up_time_start')->nullable();
            $table->string('pick_up_time_end')->nullable();
            $table->integer('max_days_notice')->nullable();
            $table->integer('min_day')->nullable();
            $table->integer('max_day')->nullable();

            $table->decimal('price',6,2)->nullable();

            $table->boolean('audio_input')->default('0');
            $table->boolean('roof_box')->default('0');
            $table->boolean('cd_player')->default('0');
            $table->boolean('baby_seat')->default('0');
            $table->boolean('power_steering')->default('0');
            $table->boolean('gps_navigator')->default('0');
            $table->boolean('air_conditioning')->default('0');

            $table->string('consumption')->nullable();

            $table->enum('status', ['publish', 'unlisted', 'unready', 'ready', 'block'])->default('unready');

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

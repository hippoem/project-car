<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile');
            $table->enum('sex', ['male', 'female', 'other'])->nullable();
            $table->date('birthday');
            $table->text('address')->nullable();
            $table->text('facebook')->nullable();
            $table->string('otp',5)->nullable();
            $table->text('about')->nullable();
            $table->boolean('verify_mobile')->default('0');
            $table->boolean('verify_email')->default('0');
            $table->string('dr_license')->nullable();
            $table->string('license_expire_date')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->enum('type', ['renter', 'owner', 'partner'])->default('renter');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

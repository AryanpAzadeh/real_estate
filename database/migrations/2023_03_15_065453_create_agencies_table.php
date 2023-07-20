<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name')->unique();
            $table->string('person_name');
            $table->string('slug');
            $table->string('code')->nullable();
            $table->string('phone');
            $table->string('local_phone');
            $table->string('email')->unique();
            $table->integer('fax')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('city_id');
            $table->integer('plaque');
            $table->string('postal_code');
            $table->string('address');
            $table->string('latlng');
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('active_date')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('agencies');
    }
};

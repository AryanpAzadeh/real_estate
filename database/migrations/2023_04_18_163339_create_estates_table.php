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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agency_id');
            $table->unsignedBigInteger('consultant_id');
            $table->string('title');
            $table->string('slug');
            $table->string('code')->nullable();
            $table->string('category');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('city_id');
            $table->integer('plaque');
            $table->string('postal_code');
            $table->string('address');
            $table->string('latlng');
            $table->string('area');
            $table->string('wc');
            $table->string('bedrooms');
            $table->string('parking');
            $table->text('features');
            $table->tinyInteger('pet');
            $table->text('description');
            $table->string('price');
            $table->string('price_type');
            $table->tinyInteger('is_paid')->default(0);
            $table->string('tracking_number')->nullable();
            $table->string('price_pay')->nullable();
            $table->string('pay_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('special')->default(0);
            $table->tinyInteger('ladder')->default(0);
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->foreign('consultant_id')->references('id')->on('consultants')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
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
        Schema::dropIfExists('estates');
    }
};

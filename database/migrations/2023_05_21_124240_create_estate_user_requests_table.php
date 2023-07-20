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
        Schema::create('estate_user_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estate_id')->unique();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('description');
            $table->string('consultant_message')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('estate_user_requests');
    }
};

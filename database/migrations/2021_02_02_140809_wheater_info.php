<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WheaterInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheater_info', function (Blueprint $table) {
            $table->id();
            $table->string('city', 90);
            $table->integer('humedity')->default(0);
            $table->integer('visivility')->default(0);
            $table->integer('pressure')->default(0);
            $table->integer('chill')->default(0);
            $table->integer('wind_direction')->default(0);
            $table->integer('wind-speed')->default(0);
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
        Schema::dropIfExists('wheater_info');
    }
}

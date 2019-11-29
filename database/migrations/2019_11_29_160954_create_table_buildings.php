<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuildings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name')->nullabel(false);
            $table->bigInteger('city_id')->unsigned(); ;
            $table->foreign('city_id')->references('id')->on('cities');
            $table->String('address')->nullabel(false);
            $table->Integer('square_mts')->nullabel(false);
            $table->bigInteger('buitype_id')->unsigned(); ;
            $table->foreign('buitype_id')->references('id')->on('buildings_types');
            $table->Integer('rooms')->nullabel(false);
            $table->Integer('kitchens')->nullabel(false);
            $table->Integer('bathrooms')->nullabel(false);
            $table->Boolean('actived')->nullabel(true);
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
        Schema::dropIfExists('buildings');
    }
}
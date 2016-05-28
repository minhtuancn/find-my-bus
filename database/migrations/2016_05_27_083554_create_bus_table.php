<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->increments('bus_id')->unsigned();
            $table->double('bus_lat');
            $table->double('bus_lon');
            $table->integer('bus_speed');
            $table->integer('bus_route_id')->unsigned();
            $table->integer('bus_last_stop_id')->unsigned();
            $table->timestamps();

            $table->foreign('bus_route_id')->references('route_id')->on('bus_route');
            $table->foreign('bus_last_stop_id')->references('stop_id')->on('bus_stops');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bus');
    }
}

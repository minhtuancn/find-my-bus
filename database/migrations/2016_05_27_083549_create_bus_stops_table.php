<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_stops', function (Blueprint $table) {
            $table->increments('stop_id')->unsigned();
            $table->string('stop_name');
            $table->double('stop_lat');
            $table->double('stop_lon');
            $table->integer('stop_route_id')->unsigned();
            $table->timestamps();

            $table->foreign('stop_route_id')->references('route_id')->on('bus_route');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bus_stops');
    }
}

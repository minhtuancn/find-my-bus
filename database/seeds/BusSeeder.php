<?php

use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus')->insert([
            'bus_lat'			=>	'3.10362',
            'bus_lon'			=>	'101.60987',
            'bus_speed'			=>	'20',
            'bus_route_id'		=>	'1',
            'bus_last_stop_id'	=>	'3',
            'created_at'		=>	new \Carbon\Carbon,
            'updated_at'		=>	new \Carbon\Carbon
        ]);
    }
}

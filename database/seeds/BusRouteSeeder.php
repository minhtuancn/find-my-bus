<?php

use Illuminate\Database\Seeder;

class BusRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus_route')->insert([
            'route_name'	=>	'Kelana Jaya Line',
            'route_number'	=>	123,
            'created_at'	=>	new \Carbon\Carbon,
            'updated_at'	=>	new \Carbon\Carbon
        ]);
    }
}

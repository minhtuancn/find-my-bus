<?php

use Illuminate\Database\Seeder;

class BusStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bus_stops')->insert([
	        [
	            'stop_name'		=>	'Kelana Jaya',
	            'stop_lat'		=>	'3.112442',
	            'stop_lon'		=>	'101.6023443',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Taman Bahagia',
	            'stop_lat'		=>	'3.11072',
	            'stop_lon'		=>	'101.6106413',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Taman Paramount',
	            'stop_lat'		=>	'3.10469',
	            'stop_lon'		=>	'101.6209913',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Asia Jaya',
	            'stop_lat'		=>	'3.10434',
	            'stop_lon'		=>	'101.6355313',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Taman Jaya',
	            'stop_lat'		=>	'3.10405',
	            'stop_lon'		=>	'101.6430913',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'KL Gateway Universiti',
	            'stop_lat'		=>	'3.1145661',
	            'stop_lon'		=>	'101.659581',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Kerinchi',
	            'stop_lat'		=>	'3.115456',
	            'stop_lon'		=>	'101.6656573',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Abdullah Hukum',
	            'stop_lat'		=>	'3.1145661',
	            'stop_lon'		=>	'101.6707213',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Bangsar',
	            'stop_lat'		=>	'3.12749',
	            'stop_lon'		=>	'101.6767513',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'KL Sentral',
	            'stop_lat'		=>	'3.1341667',
	            'stop_lon'		=>	'101.6839224',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Pasar Seni',
	            'stop_lat'		=>	'3.14247',
	            'stop_lon'		=>	'101.6930513',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Masjid Jamek',
	            'stop_lat'		=>	'3.14964',
	            'stop_lon'		=>	'101.6943613',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Dang Wangi',
	            'stop_lat'		=>	'3.15634',
	            'stop_lon'		=>	'101.7000513',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'Kampung Baru',
	            'stop_lat'		=>	'3.16137',
	            'stop_lon'		=>	'101.7044513',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ],
	        [
	            'stop_name'		=>	'KLCC',
	            'stop_lat'		=>	'3.1591341',
	            'stop_lon'		=>	'101.7114395',
	            'stop_route_id'	=>	1,
	            'created_at'	=>	new \Carbon\Carbon,
	            'updated_at'	=>	new \Carbon\Carbon
	        ]
        ]);
    }
}

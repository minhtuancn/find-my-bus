<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        
        $this->call('BusRouteSeeder');
        $this->call('BusStopSeeder');
        $this->call('BusSeeder');
    }
}

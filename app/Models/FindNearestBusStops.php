<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class FindNearestBusStops
 *
 * @package App\Models
 * @method 	getStopList|QueryBuilder static query()
 */
class FindNearestBusStops extends Model
{
    /**
     * getBusStops function
     * @param 	float		$lat1	Near Bus Stop latitude
     * @param 	float		$lon1	Near Bus Stop Longitude
     * @param 	float		$lat2	Bus location latitude
     * @param 	float		$lon2	Bus location Longitude
     * @param 	string		$unit	Distance in Kilometer (K), Miles (M), Nautical Mies (N)
     *
     * @return 	integer		Distance of the Bus
     **/
    public function getBusDistance($lat1, $lon1, $lat2, $lon2, $unit) 
    {
		$lon_difference = $lon1 - $lon2;
		$calc_dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($lon_difference));
		$calc_dist = acos($calc_dist);
		$calc_dist = rad2deg($calc_dist);
		$miles = $calc_dist * 60 * 1.1515;
		$unit = strtoupper($unit);

		if ($unit == "K") {
			return ($miles * 1.609344);
		} else if ($unit == "N") {
			return ($miles * 0.8684);
		} else {
			return $miles;
		}
	}

    /**
     * getBusTime function
     * @param 	float		$busdistance	Next Bus Distance
     * @param 	integer		$busspeed		Bus Running Speed
     *
     * @return 	float		Time to reach the Bus Stop
     **/
	public function getBusTime($busdistance, $busspeed) 
	{
        return $busspeed / $busdistance;
	}
}

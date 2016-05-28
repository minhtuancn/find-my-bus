<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusStops
 *
 * @package App\Models
 * 
 */
class BusStops extends Model
{
   /**
     * Query builder to get distance between 2 stops 
     * within a given distance from a given location
     *
     * @param  Illuminate\Database\Query\Builder  $query  Query builder instance
     * @param  mixed                              $lat    Lattitude of given location
     * @param  mixed                              $lng    Longitude of given location
     * @param  integer                            $radius Optional distance
     * @param  string                             $unit   Optional unit
     *
     * @return Illuminate\Database\Query\Builder          Modified query builder
     */
    public function scopeGetDistance($query, $lat, $lng)
    {
    	$unit = "km"; # Distance in Kilometer
    	$radius = 100; # search radium 100 km

        $unit = ($unit === "km") ? 6378.10 : 3963.17;
        $lat = (float) $lat;
        $lng = (float) $lng;
        $radius = (double) $radius;

        \DB::connection()->disableQueryLog();

        return $query->having('distance','<=',$radius)
                    ->select(\DB::raw("*,
                                ($unit * ACOS(COS(RADIANS($lat))
                                    * COS(RADIANS(stop_lat))
                                    * COS(RADIANS($lng) - RADIANS(stop_lon))
                                    + SIN(RADIANS($lat))
                                    * SIN(RADIANS(stop_lat)))) AS distance")
                    )->orderBy('distance','asc');
    }
}

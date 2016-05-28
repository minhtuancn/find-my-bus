<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
	# Models expect the table to be named the plural of the name of the Model
	# we are protecting the table name from plural - "buses"
    protected $table = 'bus';
}

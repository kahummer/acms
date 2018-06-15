<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Aeroplanes extends Model
{
    protected $fillable =
            [
			'aircraft_id',
            'manufacturers_name',
            'manufacture_date',
            'Flight_hours',
            'Address'
            ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'aeroplanes';

}


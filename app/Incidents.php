<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidents extends Model
{
     protected $fillable =
            [
			'incidentid',
            'aeroplane',
            'incidentname',
            'location',
            'casualties',
            'damagelevel',
            'description',
            'Address'
            ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'incidents';
}

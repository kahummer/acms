<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
     protected $fillable =
            [
			'name',
            'country',
            'county',
            'level',
            'type'
            ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'airports';
}

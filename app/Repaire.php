<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repaire extends Model
{
   
			protected $fillable =
            [
            'repaireid',
			'aeroplane',
            'type',
            'description',
            'image',
            ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'repairs';
           

   
}

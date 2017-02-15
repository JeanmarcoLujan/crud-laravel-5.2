<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $tabla= 'asdasd';

    public $timestamps=true;

    protected $fillable=[
    	'dni',
        'name',
    	'rol',
    ];

}

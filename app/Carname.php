<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carname extends Model
{
    protected $fillable = [
        'car_name'
    ];

    public $timestamps = false;
}

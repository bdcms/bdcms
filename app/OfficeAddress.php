<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office_address extends Model
{
    protected $fillable = [
        'off_upazilla', 'off_address', 'off_email','off_mobile','off_web'
    ];
    public $timestamps = false;
}

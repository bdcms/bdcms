<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'dri_name', 'dri_father_name', 'dri_nid','dri_birth_date','dri_profile_pic','dri_email','dri_mobile','dri_passport','dri_lincence','dri_address','car_id'
    ];
}

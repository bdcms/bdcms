<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'own_name', 'own_father_name', 'own_nid','own_birth_date', 'own_profile_pic', 'own_email','own_mobile', 'own_passport', 'own_lincence', 'own_address','car_id' 
  	];
}

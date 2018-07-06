<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'carname_id','car_wheel', 'car_chasis', 'car_metro','car_reg_num', 'car_reg_date', 'car_insurence','car_road_permit_no', 'car_engine_num', 'driver_id','owner_id', 'car_document_pdf', 'car_color','car_color'
    ];
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
   protected $fillable = [
        'not_title', 'not_pdf', 'not_desc'
    ];
}

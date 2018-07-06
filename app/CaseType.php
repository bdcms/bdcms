<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseType extends Model
{
    protected $fillable = [
        'case_name', 'case_fine'
    ];
    public $timestamps = false;
}

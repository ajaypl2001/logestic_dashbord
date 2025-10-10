<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mc extends Model
{
     protected $table = 'mc';
    protected $primaryKey = 'id';
    public $timestamps = false; 

    protected $fillable = [
        'mc_no',
        'carrier_name',
        'commodity_type',
        'commodity_value',
        'equ_type',
        'com_value_prf',
        'created_datetime',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrierFleetType extends Model
{
   protected $table = 'carrier_fleet_type';

    protected $fillable = [
        'fleet_name',
        'fleet_sts',
    ];
}

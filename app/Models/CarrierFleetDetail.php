<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrierFleetDetail extends Model
{
    protected $table = 'carrier_fleet_details';


    protected $fillable = [
        'carrier_id',
        'equipment_name',
        'quantity',
        'is_checked',
    ];


    public $timestamps = true;


   
     public function carrier()
    {
        return $this->belongsTo(Carrier::class, 'id');
    }
}

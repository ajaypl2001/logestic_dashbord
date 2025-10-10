<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipperDetail extends Model
{
    protected $table = 'shipper_details'; 

    protected $fillable = [
        'creation_id',
        'shipper_id',
        'shipper_location',
        'shipper_date',
        'shipper_chktime',
        'shipper_description',
        'shipper_type',
        'shipper_qty',
        'shipper_weight',
        'shipper_value',
        'shipping_notes',
        'po_number',
        'customer_broker',
    ];

     public function loadcreation()
    {
        return $this->belongsTo(LoadCreation::class, 'creation_id', 'id');
    }
}

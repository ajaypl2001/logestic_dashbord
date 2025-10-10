<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $table = 'charges';

    protected $fillable = [
        'creation_id',
        'type',
        'charge',
        'amount',
    ];

    public function loadcreation()
    {
        return $this->belongsTo(LoadCreation::class, 'creation_id', 'id');
    }
}

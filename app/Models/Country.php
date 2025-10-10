<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'countries_name',
        'countries_iso_code',
        'countries_isd_code',
        'cou_sts'
    ];

     public function states()
    {
        return $this->hasMany(State::class, 'cou_id');
    }
}

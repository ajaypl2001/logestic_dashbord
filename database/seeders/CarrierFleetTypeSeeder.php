<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarrierFleetType;

class CarrierFleetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         CarrierFleetType::insert([
            ['id' => 1, 'fleet_name' => "22' VAN", 'fleet_sts' => 1],
            ['id' => 2, 'fleet_name' => "48' Reefer", 'fleet_sts' => 1],
            ['id' => 3, 'fleet_name' => "53' Reefer", 'fleet_sts' => 1],
        ]);
    
    }
}

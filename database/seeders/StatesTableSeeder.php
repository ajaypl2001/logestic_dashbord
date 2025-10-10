<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['id' => 1, 'cou_id' => '98', 'state' => 'Haryana', 'state_sts' => 1],
            ['id' => 2, 'cou_id' => '98', 'state' => 'Himachal Pardesh', 'state_sts' => 1],
        ];

        foreach ($states as $state) {
            State::updateOrCreate(['id' => $state['id']], $state);
        }
    }
}

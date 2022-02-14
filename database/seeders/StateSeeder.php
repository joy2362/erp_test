<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::updateOrCreate(
            [
                'state_name' => "Karnataka"
            ],
            [
                'country_id' => 1,
                'state_name' => "Karnataka"
            ]

        );

        State::updateOrCreate(
            [
                'state_name' => "Maharashtra"
            ],
            [
                'country_id' => 1,
                'state_name' => "Maharashtra"
            ]

        );

        State::updateOrCreate(
            [
                'state_name' => "Tamil Nadu"
            ],
            [
                'country_id' => 1,
                'state_name' => "Tamil Nadu"
            ]

        );

        State::updateOrCreate(
            [
                'state_name' => "Kerala"
            ],
            [
                'country_id' => 1,
                'state_name' => "Kerala"
            ]

        );

        State::updateOrCreate(
            [
                'state_name' => "Punjab"
            ],
            [
                'country_id' => 1,
                'state_name' => "Punjab"
            ]

        );
    }
}

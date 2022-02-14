<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fetch state Karnataka
        $state = State::where('state_name','Karnataka')->first();
        City::create([
           'city_name' => "Bengaluru",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Mysuru",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Ballari",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Vijayapura",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Tumakuru",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Raichur",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Bidar",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Hospet",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Gadag-Betageri",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Robertsonpet",
            'state_id' => $state->id,
        ]);

        //state Maharashtra
        $state = State::where('state_name','Maharashtra')->first();

        City::create([
            'city_name' => "Mumbai",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Pune",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Nagpur",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Thane",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Nashik",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Solapur",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Amravati",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Kolhapur",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Ulhasnagar",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Malegaon",
            'state_id' => $state->id,
        ]);

        //fetch state Tamil Nadu
        $state = State::where('state_name','Tamil Nadu')->first();

        City::create([
            'city_name' => "Chennai",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Coimbatore",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Madurai",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Salem",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Tiruppur",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Vellore",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Erode",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Dindigul",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Hosur",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Karur",
            'state_id' => $state->id,
        ]);

        //fetch state Kerala
        $state = State::where('state_name','Kerala')->first();

        City::create([
            'city_name' => "Kochi",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Kollam",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Thrissur",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Thiruvananthapuram",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Alappuzha",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Kottayam",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Manjeri",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Ponnani",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Payyanur",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Koyilandy",
            'state_id' => $state->id,
        ]);

        //fetch state Punjab
        $state = State::where('state_name','Punjab')->first();

        City::create([
            'city_name' => "Ludhiana",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Amritsar",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Jalandhar",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Patiala",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Bathinda",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Mohali",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Firozpur",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Batala",
            'state_id' => $state->id,
        ]);

        City::create([
            'city_name' => "Pathankot",
            'state_id' => $state->id,
        ]);
        City::create([
            'city_name' => "Moga",
            'state_id' => $state->id,
        ]);

    }
}

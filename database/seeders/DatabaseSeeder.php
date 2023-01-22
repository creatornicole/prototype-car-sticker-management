<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\RequestModell;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //dynamic creation of database entries with status beantragt
        \App\Models\RequestModell::factory(10)->create();

        //hard coded database entries
        //to make sure that all the functionality of the application can be tested

        //status: bestaetigt
        RequestModell::create([
            'status' => 'bestaetigt',
            'firstname' => 'Max',
            'surname' => 'Mustermann',
            'email' => 'maxmustermann@testmail.com',
            'brand' => 'one',
            'model' => 'starfighter',
            'hstn' => '12345',
            'type' => 'air',
            'cnstrYear' => '2023',
            'color' => 'rot',
            'appointment' => '23.01.2023'
        ]);
        RequestModell::create([
            'status' => 'bestaetigt',
            'firstname' => 'George',
            'surname' => 'Smith',
            'email' => 'gsmith@testmail.com',
            'brand' => 'two',
            'model' => 'startrek',
            'hstn' => '56789',
            'type' => 'RR',
            'cnstrYear' => '1963', 
            'color' => 'blau',
            'appointment' => '23.07.2023'
        ]);
        RequestModell::create([
            'status' => 'bestaetigt',
            'firstname' => 'Clara',
            'surname' => 'Wunder',
            'email' => 'clarawunder@testmail.com',
            'brand' => 'three',
            'model' => 'planet',
            'hstn' => '10121',
            'type' => 'space',
            'cnstrYear' => '2020',
            'color' => 'schwarz',
            'appointment' => '28.03.2023'
        ]);

        //status: bestaetigt
        RequestModell::create([
            'status' => 'laufend',
            'firstname' => 'Max',
            'surname' => 'Mustermann',
            'email' => 'maxmustermann@testmail.com',
            'brand' => 'one',
            'model' => 'starfighter',
            'hstn' => '12345',
            'type' => 'air',
            'cnstrYear' => '2023',
            'color' => 'rot',
            'appointment' => '23.01.2023'
        ]);
        RequestModell::create([
            'status' => 'laufend',
            'firstname' => 'George',
            'surname' => 'Smith',
            'email' => 'gsmith@testmail.com',
            'brand' => 'two',
            'model' => 'startrek',
            'hstn' => '56789',
            'type' => 'RR',
            'cnstrYear' => '1963', 
            'color' => 'blau',
            'appointment' => '23.07.2023'
        ]);
        RequestModell::create([
            'status' => 'laufend',
            'firstname' => 'Clara',
            'surname' => 'Wunder',
            'email' => 'clarawunder@testmail.com',
            'brand' => 'three',
            'model' => 'planet',
            'hstn' => '10121',
            'type' => 'space',
            'cnstrYear' => '2020',
            'color' => 'schwarz',
            'appointment' => '28.03.2023'
        ]);
    }
}

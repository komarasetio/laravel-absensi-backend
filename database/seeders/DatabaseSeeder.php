<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Setiodarman Admin',
            'email' => 'setiodarman@fic16.com',
            'password'=> Hash::make('12345678'),
        ]);

    //data dummy for company
    \App\Models\Company::create([
        'name' => 'SMANSALOS',
        'email'=> 'setiodarman@fic16.com',
        'address'=> 'jl. Sukarno-Hatta 110 Losari, Cirebon',
        'latitude'=> '-6.841753791428467',
        'longitude'=> '108.80773849254601',
        'radius_km'=> '0.5',
        'time_in'=> '08:00',
        'time_out'=> '17:00',

    ]);
    $this->call([
        AttendanceSeeder::class,
        PermissionSeeder::class,
    ]);
    }

}

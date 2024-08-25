<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\Salon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
       Client::create([
           'name' => 'Ali',
           'phone' => '+992-92-366-86-66',
           'email' => 'ali@gmail.com',
           'description' => 'zur',
       ]);

       Salon::create([
           'name' => 'Everest',
           'phone' => '+992-92-366-86-66',
           'email' => 'Everest@gmail.com',
           'working_hours' => 'Dushanbe: 8:00-21:00',
       ]);

    }

}

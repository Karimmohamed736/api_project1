<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //library faker to create rondom post and title
        // $faker = \Faker\Factory::create();
        // for ($i = 1; $i <= 15; $i++) {
        //     Post::create([
        //         'user_id'=> User::inRandomOrder()->first()->id,    
        //         'Offday'=> $faker->sentence(4),
        //         'Arrival_station'=> $faker->paragraph(),
                
        //     ]);
            
        // }
    }
}

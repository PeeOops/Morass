<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Highlight;
use DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Database seeding untuk Admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'usertype' => 'adm',
            'password' => bcrypt('123456789')
        ]);

        // Database seeding untuk User
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'usertype' => 'usr',
            'password' => bcrypt('123456789')
        ]);


        // Database seeding untuk Highlights pada Home Page
        DB::table('highlights')->insert([
            'title' => 'Goose Goose Duck',
            'description' => 'Gooose, goose, DUCK? A game of social deduction where you and your fellow geese must work together to complete your mission',
            'image' => '/images/highlight.jpg'
        ]);

        
    }
}

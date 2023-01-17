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

        // Database seeding untuk featured title & description
        DB::table('featureds')->insert([
            'title' => 'Featured',
            'description' => 'Explore one of our top games based on all sources of revenues'
        ]);

        // Database seeding untuk 3 featured games
        DB::table('featuredgames')->insert([
            'game_title' => 'The Witcher 3 : Wild Hunt',
            'price' => '25.55',
            'image' => '/images/featured1.png'
        ]);

        DB::table('featuredgames')->insert([
            'game_title' => 'Red Dead Redemption II',
            'price' => '78.00',
            'image' => '/images/featured2.png'
        ]);

        DB::table('featuredgames')->insert([
            'game_title' => 'Forza Horizon 5',
            'price' => '43.00',
            'image' => '/images/featured3.png'
        ]);



        
    }
}

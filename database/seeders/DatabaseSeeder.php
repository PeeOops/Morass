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

        // Database seeding untuk Categories
        DB::table('categories')->insert([
            'name' => 'Fantasy',
        ]);

        DB::table('categories')->insert([
            'name' => 'RPG',
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Adventure',
        ]);

        DB::table('categories')->insert([
            'name' => 'Open World',
        ]);

        DB::table('categories')->insert([
            'name' => 'Action',
        ]);

        DB::table('categories')->insert([
            'name' => 'Horror',
        ]);

        // Database seeding untuk Products
        DB::table('products')->insert([
            'title' => 'Bendy and the Dark Revival',
            'description' => 'Bendy and the Dark Revival is a first-person survival horror game set in the creepiest cartoon studio to ever exist. Discover the truth. Escape the studio. Above all, fear the Ink Demon... and survive.',
            'price' => '29.99',
            'image' => '/images/bendy.jpg'
        ]);

        DB::table('products')->insert([
            'title' => 'Forspoken',
            'description' => 'Forspoken follows the journey of Frey, a young New Yorker transported to the beautiful and cruel land of Athia. In search of a way home, Frey must use her newfound magical abilities to traverse sprawling landscapes and battle monstrous creatures.',
            'price' => '69.99',
            'image' => '/images/forspoken.png'
        ]);

        DB::table('products')->insert([
            'title' => 'Hogwarts Legacy',
            'description' => 'Hogwarts Legacy is an immersive, open-world action RPG. Now you can take control of the action and be at the center of your own adventure in the wizarding world.',
            'price' => '59.99',
            'image' => '/images/hogwarts.png'
        ]);

        DB::table('products')->insert([
            'title' => 'Like a Dragon: Ishin!',
            'description' => 'Don the clothes and weaponry of the elite to become the samurai of legends, Sakamoto Ryoma. Draw your blade and join the revolution in this heated historical adventure.',
            'price' => '59.99',
            'image' => '/images/ishin.png'
        ]);

        // Database seeding untuk Product Categories
        DB::table('product_categories')->insert([
            'product_id' => '1',
            'category_id' => '3',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '1',
            'category_id' => '5',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '1',
            'category_id' => '6',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '2',
            'category_id' => '1',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '2',
            'category_id' => '2',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '2',
            'category_id' => '3',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '2',
            'category_id' => '5',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '3',
            'category_id' => '1',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '3',
            'category_id' => '2',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '3',
            'category_id' => '3',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '3',
            'category_id' => '4',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '4',
            'category_id' => '3',
        ]);

        DB::table('product_categories')->insert([
            'product_id' => '4',
            'category_id' => '5',
        ]);
    }
}
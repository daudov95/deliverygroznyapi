<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stores')->insert([
            [
                'title' => "Точка",
                'description' => fake()->text(100),
                'time' => "30-55",
                'image' => "https://lemontreemall.co.za/wp-content/uploads/2019/07/mcdonalds-logo.png",
                'price' => 800,
                'is_open' => 1,
                'is_hide' => 0,
                'type' => 'restaurant',
            ],
            [
                'title' => "Burger Avenue",
                'description' => fake()->text(100),
                'time' => "30-55",
                'image' => "https://media-cdn.tripadvisor.com/media/photo-s/0e/4c/de/3f/burger-avenue.jpg",
                'price' => 500,
                'is_open' => 1,
                'is_hide' => 0,
                'type' => 'restaurant',
            ],
            [
                'title' => "Royal Burger",
                'description' => fake()->text(100),
                'time' => "30-55",
                'image' => "https://cdn.dribbble.com/users/3499911/screenshots/16026631/royal_burger_logo_4x.jpg",
                'price' => 400,
                'is_open' => 1,
                'is_hide' => 0,
                'type' => 'restaurant',
            ],
            [
                'title' => "Dodo Pizza",
                'description' => fake()->text(100),
                'time' => "30-55",
                'image' => "https://static.tildacdn.com/tild3838-6264-4135-b662-333339613933/LogoBackgroundMainOr.jpg",
                'price' => 600,
                'is_open' => 1,
                'is_hide' => 0,
                'type' => 'restaurant',
            ],
            [
                'title' => "Crispy",
                'description' => fake()->text(100),
                'time' => "30-55",
                'image' => "https://media-cdn.tripadvisor.com/media/photo-s/0c/c5/f7/f5/crispy-srls.jpg",
                'price' => 500,
                'is_open' => 1,
                'is_hide' => 0,
                'type' => 'restaurant',
            ],
            [
                'title' => "BlackStarBurger",
                'description' => fake()->text(100),
                'time' => "30-55",
                'image' => "https://www.newsko.ru/media/5464205/burger.jpg",
                'price' => 300,
                'is_open' => 1,
                'is_hide' => 0,
                'type' => 'restaurant',
            ]
        ]);
    }
}


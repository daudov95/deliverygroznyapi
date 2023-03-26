<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('store_products')->insert([
            [
                "title" => "Burger",
                "description" => "testy burger",
                "image" => "img",
                "old_price" => null,
                "price" => 80,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Crisps",
                "description" => "desc",
                "image" => "img",
                "old_price" => null,
                "price" => 50,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Box Master",
                "description" => "desc",
                "image" => "img",
                "old_price" => null,
                "price" => 100,
                "filter_id" => 1,
                "store_id" => 1,
            ]
        ]);

    }
}

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
                "description" => "tasty burger",
                "image" => "https://burgerkings.ru/image/cache/catalog/photo/436959869-shvedskij-burger-600x600.jpg",
                "old_price" => null,
                "price" => 80,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Crisps",
                "description" => "desc",
                "image" => "https://cdn.lifehacker.ru/wp-content/uploads/2023/01/shutterstock_658210576_1674561493-scaled-e1674561548924-1280x640.jpg",
                "old_price" => null,
                "price" => 50,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Box Master",
                "description" => "desc",
                "image" => "https://kfckosova.com/wp-content/uploads/2020/05/7.Boxmaster-compressor.png",
                "old_price" => null,
                "price" => 170,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Burger",
                "description" => "tasty burger",
                "image" => "https://burgerkings.ru/image/cache/catalog/photo/436959869-shvedskij-burger-600x600.jpg",
                "old_price" => null,
                "price" => 150,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Crisps",
                "description" => "desc",
                "image" => "https://cdn.lifehacker.ru/wp-content/uploads/2023/01/shutterstock_658210576_1674561493-scaled-e1674561548924-1280x640.jpg",
                "old_price" => null,
                "price" => 90,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Box Master",
                "description" => "desc",
                "image" => "https://kfckosova.com/wp-content/uploads/2020/05/7.Boxmaster-compressor.png",
                "old_price" => null,
                "price" => 100,
                "filter_id" => 1,
                "store_id" => 1,
            ],
            [
                "title" => "Crisps",
                "description" => "desc",
                "image" => "https://cdn.lifehacker.ru/wp-content/uploads/2023/01/shutterstock_658210576_1674561493-scaled-e1674561548924-1280x640.jpg",
                "old_price" => null,
                "price" => 50,
                "filter_id" => 1,
                "store_id" => 2,
            ],
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_option_values')->insert([
            [
                'title' => "Белый итальянский (без обсыпки)",
                'price' => 170,
                'option_id' => 1,
            ],
            [
                'title' => "Белый с кунжутом",
                'price' => 50,
                'option_id' => 1,
            ],
            [
                'title' => "Зерновой",
                'price' => 0,
                'option_id' => 1,
            ],
            [
                'title' => "1000 островов",
                'price' => 100,
                'option_id' => 1,
            ],
            [
                'title' => "Барбекю",
                'price' => 30,
                'option_id' => 1,
            ],
            [
                'title' => "Кетчуп",
                'price' => 100,
                'option_id' => 1,
            ],
            [
                'title' => "Без соуса",
                'price' => 0,
                'option_id' => 1,
            ],

        ]);
    }
}

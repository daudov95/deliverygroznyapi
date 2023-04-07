<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_options')->insert([
            [
                'title' => 'Выберите хлеб',
                'type' => 'radio',
                'product_id' => 1,
            ],
            [
                'title' => 'Выберите первый соус',
                'type' => 'checkbox',
                'product_id' => 1,
            ],
            [
                'title' => 'Выберите хлеб',
                'type' => 'radio',
                'product_id' => 2,
            ],
            [
                'title' => 'Выберите первый соус',
                'type' => 'checkbox',
                'product_id' => 2,
            ],
            [
                'title' => 'Выберите хлеб',
                'type' => 'radio',
                'product_id' => 3,
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('store_filters')->insert([
            [
                'title' => 'Пицца',
                'store_id' => 1,
            ],
            [
                'title' => 'Закуски',
                'store_id' => 2,
            ]
        ]);
    }
}

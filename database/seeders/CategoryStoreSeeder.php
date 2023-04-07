<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_store')->insert([
            [
                'store_id' => 1,
                'category_id' => 1,
            ],
            [
                'store_id' => 1,
                'category_id' => 2,
            ],
            [
                'store_id' => 1,
                'category_id' => 3,
            ],
            [
                'store_id' =>2,
                'category_id' => 2,
            ],
            [
                'store_id' => 2,
                'category_id' => 3,
            ],
            [
                'store_id' => 3,
                'category_id' => 1,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('store_reviews')->insert([
            [
                'text' => fake()->text(100),
                'stars' => 3,
                'store_id' => 1,
                'user_id' => 1,
            ],
            [
                'text' => fake()->text(100),
                'stars' => 1,
                'store_id' => 1,
                'user_id' => 2,
            ],
            [
                'text' => fake()->text(100),
                'stars' => 5,
                'store_id' => 1,
                'user_id' => 3,
            ],
            [
                'text' => fake()->text(100),
                'stars' => 2,
                'store_id' => 2,
                'user_id' => 1,
            ],
        ]);
    }
}

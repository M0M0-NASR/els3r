<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\ProductPrices;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Category Seeding 
        Category::factory()->categroyData1()->create();
        Category::factory()->categroyData2()->create();
        Category::factory()->categroyData3()->create();

        // Product Seeding
        Product::factory()->count(10)->create();
    }
}

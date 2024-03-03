<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id' => 1,
            'name' =>fake()->name(),
            'code'=>'45sadsa',
            'sale_price' => fake()->numberBetween(1,125),
            'purchase_price' => fake()->numberBetween(1,125),
            'vat' => fake()->numberBetween(1,10),
            'stock' => fake()->numberBetween(1,10),
            'status' => 1,
            'entry_date' => fake()->date(),
            'category_id' => 1
        ]);
    }
}

<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class Category_productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $categories = Category::all();
        
        $products->each(function ($products) use ($categories) {
            $random = $categories->shuffle()->take(2);
            $products->categories()->attach($random);
        });
        
    }
}

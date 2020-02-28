<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Spa',
            'active'=>1,
        ]);

        Category::create([
            'name'=>'Mochilero',
            'active'=>1,
        ]);

        Category::create([
            'name'=>'All Inclusive',
            'active'=>1,
        ]);

        Category::create([
            'name'=>'Aventura',
            'active'=>1,
        ]);

        Category::create([
            'name'=>'Relax',
            'active'=>1,
        ]);

        Category::create([
            'name'=>'Turismo Culinario',
            'active'=>1,
        ]);

        Category::create([
            'name'=>'Turismo Joven',
            'active'=>1,
        ]);
    }
}

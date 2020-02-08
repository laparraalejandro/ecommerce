<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Villa la Angostura',
            'slug'=>'villa-la-angostura',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1799999,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'San Carlos de Bariloche',
            'slug'=>'san-carlos-de-bariloche',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Las Leñas',
            'slug'=>'las-lenias',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Quebrada del Condorito',
            'slug'=>'quebrada-del-condorito',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Machu Picchú',
            'slug'=>'machu-picchu',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Puerto Iguazú',
            'slug'=>'puerto-iguazu',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Villa General Belgrano',
            'slug'=>'villa-gral-belgrano',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'La Matanza',
            'slug'=>'la-matanza',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Puerto Madrin',
            'slug'=>'puerto-madrin',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Mar del Plata',
            'slug'=>'mar-del-plata',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Glaciar Perito Moreno',
            'slug'=>'perito-moreno',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Islas Galapagos',
            'slug'=>'galapagos',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);

        Product::create([
            'name'=>'Reñaca',
            'slug'=>'reniaca',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1700000,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
        ]);
    }
}

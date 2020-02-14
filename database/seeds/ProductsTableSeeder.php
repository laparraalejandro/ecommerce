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
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'San Carlos de Bariloche',
            'slug'=>'san-carlos-de-bariloche',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1852519,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>0,
        ]);

        Product::create([
            'name'=>'Las Leñas',
            'slug'=>'las-lenias',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>2615324,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Quebrada del Condorito',
            'slug'=>'quebrada-del-condorito',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1500099,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Machu Picchú',
            'slug'=>'machu-picchu',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>4999999,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>2,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Puerto Iguazú',
            'slug'=>'puerto-iguazu',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>2750259,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Villa General Belgrano',
            'slug'=>'villa-gral-belgrano',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1599999,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'La Matanza',
            'slug'=>'la-matanza',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>2752224,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>0,
        ]);

        Product::create([
            'name'=>'Puerto Madrin',
            'slug'=>'puerto-madrin',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>542525,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Mar del Plata',
            'slug'=>'mar-del-plata',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1200099,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Glaciar Perito Moreno',
            'slug'=>'perito-moreno',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>4752561,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Islas Galapagos',
            'slug'=>'galapagos',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1500099,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>2,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Reñaca',
            'slug'=>'reniaca',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>654299,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>2,
            'active'=>1,
        ]);
    }
}

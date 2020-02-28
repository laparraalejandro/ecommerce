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
            'image'=>'villa-la-angostura.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1799999,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'San Carlos de Bariloche',
            'slug'=>'san-carlos-de-bariloche',
            'image'=>'san-carlos-de-bariloche.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1852519,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>0,
        ]);

        Product::create([
            'name'=>'Las Leñas',
            'slug'=>'las-lenias',
            'image'=>'las-lenias.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>2615324,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Quebrada del Condorito',
            'slug'=>'quebrada-del-condorito',
            'image'=>'quebrada-del-condorito.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1500099,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Machu Picchú',
            'slug'=>'machu-picchu',
            'image'=>'machu-picchu.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>4999999,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>2,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Puerto Iguazú',
            'slug'=>'puerto-iguazu',
            'image'=>'puerto-iguazu.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>2750259,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Villa General Belgrano',
            'slug'=>'villa-gral-belgrano',
            'image'=>'villa-gral-belgrano.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1599999,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'La Matanza',
            'slug'=>'la-matanza',
            'image'=>'la-matanza.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>2752224,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>0,
        ]);

        Product::create([
            'name'=>'Puerto Madrin',
            'slug'=>'puerto-madrin',
            'image'=>'puerto-madrin.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>542525,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Mar del Plata',
            'slug'=>'mar-del-plata',
            'image'=>'mar-del-plata.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1200099,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Glaciar Perito Moreno',
            'slug'=>'perito-moreno',
            'image'=>'perito-moreno.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>4752561,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>1,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Islas Galapagos',
            'slug'=>'galapagos',
            'image'=>'galapagos.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>1500099,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>2,
            'active'=>1,
        ]);

        Product::create([
            'name'=>'Reñaca',
            'slug'=>'reniaca',
            'image'=>'reniaca.jpg',
            'details'=>'6 dias, 7 noches, All Inclusive',
            'price'=>654299,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat!',
            'user_id'=>2,
            'active'=>1,
        ]);
    }
}

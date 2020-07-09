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
        // Vaciar la tabla.
        Product::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'id' => $faker->numberBetween(0,2718192029),
                'name' => $faker->name,
                'code' => $faker->postcode,
                //'price' => '1234',
                'status' => 'active'
            ]);
        }
    }
}

<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.


        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 50; $i++) {
            Customer::create([
                'id' => $faker->numberBetween(0,2718192029),
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'document' => $faker->sentence,

            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class ClientModel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
           ClientModel::create([
               'name' => $faker->sentence(3),
               'email' =>  $faker->sentence(3),
               'status' =>  $faker->sentence(3),
               'Telephone' =>  $faker->sentence(3)
               ]);
        }
    }
}

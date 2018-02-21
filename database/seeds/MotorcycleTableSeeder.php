<?php

use App\Motorcycle;
use Illuminate\Database\Seeder;

class MotorcycleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Motorcycle::truncate();
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Motorcycle::create([
                'name'     => $faker->name,
                'model'    => $faker->year($max = 'now'),
                'cc'       => $faker->numberBetween(1000, 9000),
                'color_id' => $faker->numberBetween(1, 3),
                'weight'   => $faker->numberBetween(1000, 9000),
                'price'    => $faker->numberBetween(2000, 50000),
                'img_path' => $faker->imageUrl($width = 640, $height = 480)

            ]);
        }
    }
}

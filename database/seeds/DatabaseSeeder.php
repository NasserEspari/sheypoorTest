<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');

        $this->call(ColorTableSeeder::class);
        $this->command->info('Color table seeded!');

        $this->call(MotorcycleTableSeeder::class);
        $this->command->info('Motorcycle table seeded!');
    }
}

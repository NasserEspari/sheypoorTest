<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::truncate();

        Color::create([
            'name' => 'blue'
        ]);

        Color::create([
            'name' => 'red'
        ]);

        Color::create([
            'name' => 'black'
        ]);
    }
}

<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'     => 'Nasser Esparipour',
            'email'    => 'nasser.esparipour@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}

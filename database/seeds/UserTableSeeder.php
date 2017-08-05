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
        User::create([
          'name' => 'Yarno',
          'email' => 'minejarno@gmail.com',
          'password' => Hash::make('pass'),
        ]);

        User::create([
          'name' => 'teuben',
          'email' => 'info@teubenautos.nl ',
          'password' => Hash::make('admin'),
        ]);
    }
}

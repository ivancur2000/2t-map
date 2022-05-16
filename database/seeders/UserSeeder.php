<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Marialejandra Quintanilla',
            'email'=>'male@gmail.com',
            'password'=>bcrypt('12345678'),
         ]);
        $user2 = User::create([
            'name'=>'Ivan Curtiñez',
            'email'=>'ivan@gmail.com',
            'password'=>bcrypt('hola123'),
         ]);
        $user->assignRole('Admin');
        $user2->assignRole('Admin');

         User::factory(49)->create();
    }
}

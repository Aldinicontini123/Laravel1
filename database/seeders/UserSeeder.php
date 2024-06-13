<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= NEW User();

        $user->name='Aldo corona ';
        $user->email='Aldo_Corona12@hotmail.com';
        $user->password=bcrypt('12345678');

        $user->save();


        User::factory(10)->create();
    }
}

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
        $user = new User();

        $user->name = 'Jeison Cerpa';
        $user->email = 'cerpajeison@gmail.com';
        $user->password = bcrypt('123');

        $user->save();

        $user = new User();

        $user->name = 'Isa';
        $user->email = 'isa@gmail.com';
        $user->password = bcrypt('123');

        $user->save();
    }
}

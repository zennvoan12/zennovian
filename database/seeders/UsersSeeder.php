<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Muhammad Farhan Novian',
            'email' => 'inside.suck@gmail.com',
            'password' => md5('12345')
        ]);


        User::create([
            'name' => 'Lea Aleyda',
            'email' => 'leaaleyda@gmail.com',
            'password' => md5('12345')
        ]);

        User::create([
            'name' => 'Dono Steven',
            'email' => 'steven@gmail.com',
            'password' => md5('12345')
        ]);

        User::create([
            'name' => 'Asep Saep',
            'email' => 'asepasep@gmail.com',
            'password' => md5('12345')
        ]);
    }
}
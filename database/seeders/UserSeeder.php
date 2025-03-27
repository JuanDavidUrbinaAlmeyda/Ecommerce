<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1=new User();
        $user1->name='John Doe';
        $user1->email='johndoe@gmail.com';
        $user1->password='password';
        $user1->save();

        $user2=new User();
        $user2->name='Jane Doe';
        $user2->email='janedoe@gmail.com';
        $user2->password='password';
        $user2->save();
    }
}

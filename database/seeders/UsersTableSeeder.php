<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'firman@gmail.com',
            'password' => bcrypt('firman123'),
            'name' => 'firman',
        ]);
        
        user::create([
            'email' => 'mansyah@gmail.com',
            'password' => bcrypt('mansyah123'),
            'name' => 'mansyah'
        ]);
        
        Auth::login($user);
    }
}

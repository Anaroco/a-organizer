<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        // User::factory()->roles(1, ['skills' => 'draw'])->create();
        
        $standBy = User::create(array(
            'name' => "standBy",
            'email' => "standBy@gmail.com",
            'email_verified_at' => now(),
            'password' => 'standBy',
            'remember_token' => Str::random(10),
        ));

        $standBy->roles()->sync([1]);
        
        $admin = User::create(array(
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => 'admin',
            'remember_token' => Str::random(10),
        ));

        $admin->roles()->sync([2]);
        
        $technician = User::create(array(
            'name' => "technician",
            'email' => "technician@gmail.com",
            'email_verified_at' => now(),
            'password' => 'technician',
            'remember_token' => Str::random(10),
        ));

        $technician->roles()->sync([3]);
        
        $student = User::create(array(
            'name' => "student",
            'email' => "student@gmail.com",
            'email_verified_at' => now(),
            'password' => 'student',
            'remember_token' => Str::random(10),
        ));

        $student->roles()->sync([4]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'first_name'=>'Admin',
            'last_name'=>'1',
            'email'=>'admin@admin.com',
            'Password'=> hash::make('password'),
            'confirm_password'=> hash::make('confirm_paswrod'),
            'Address'=> 'T nagar',
            'Phone'=> '9876543210',
            'Status'=> 'Single',

        ]);
    }
}

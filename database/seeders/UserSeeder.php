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
        //
        $user = [
            [
                'username'=>'manager1',
                'name'=>'Akunmanager',
                'email'=>'manager@gmail.com',
                'level'=>'manager',
                'password'=>bcrypt('123456')
            ],
            
            [
                'username'=>'eksekutif1',
                'name'=>'AkunEksekutif1',
                'email'=>'eksekutif1@gmail.com',
                'level'=>'eksekutif',
                'password'=>bcrypt('123456')
            ],
            

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
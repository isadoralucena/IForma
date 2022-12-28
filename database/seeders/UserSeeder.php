<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'glaucyrlei.p@escolar.ifrn.edu.br',
            'password' => Hash::make(123123123),
            'userType' => 3,
            'date' => '2022-01-01'
        ]);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123123123),
            'userType' => 3,
            'date' => '2022-01-01'
        ]);
    }
}

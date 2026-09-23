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
     */
    public function run(): void
    {
        User::create([
            'username' => 'Admin',
            'name' => 'Administrator',
            'email' => 'admin@sekolah.sch.id',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        User::create([
            'username' => 'operator',
            'name' => 'Operator Sekolah',
            'email' => 'operator@sekolah.sch.id',
            'password' => Hash::make('password'),
            'role' => 'Operator',
        ]);
        //
    }
}

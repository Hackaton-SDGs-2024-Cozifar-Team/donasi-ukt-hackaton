<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'fullname' => 'Nico Flassy',
                'place_birth' => 'Jember',
                'date_birth' => '2000-01-01',
                'email' => 'nico@gmail.com',
                'password' => bcrypt('nico123'),
                'no_telp' => '085689543421',
                'role' => 'admin'
            ],
            [
                'fullname' => 'Bayu',
                'place_birth' => 'Jember',
                'date_birth' => '2000-01-01',
                'email' => 'bayu@example.com',
                'password' => bcrypt('12345678'),
                'no_telp' => '085689543421',
                'role' => 'recipient'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
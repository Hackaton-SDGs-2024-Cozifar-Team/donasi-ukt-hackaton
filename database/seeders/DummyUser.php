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
                'address' => 'Jember',
                'photo' => 'user1.jpg',
                'role' => 'admin'
            ],
            [
                'fullname' => 'Admin',
                'place_birth' => 'Jember',
                'date_birth' => '2000-01-01',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'no_telp' => '085689543421',
                'address' => 'Banyuwangi',
                'photo' => 'user1.jpg',
                'role' => 'admin'
            ],
            [
                'fullname' => 'Donatur',
                'place_birth' => 'Kediri',
                'date_birth' => '2000-01-01',
                'email' => 'donatur@gmail.com',
                'password' => bcrypt('donatur123'),
                'no_telp' => '085676567898',
                'address' => 'Kediri',
                'photo' => 'user1.jpg',
                'role' => 'donatur'
            ],
                [
                    'fullname' => 'Recipient',
                    'place_birth' => 'Kediri',
                    'date_birth' => '2000-01-01',
                    'email' => 'recipient@gmail.com',
                    'password' => bcrypt('12345678'),
                    'no_telp' => '085676567898',
                    'address' => 'Kediri',
                    'photo' => 'user1.jpg',
                    'role' => 'recipient'
                ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
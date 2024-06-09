<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FamilyInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyFamilyInformation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'father_name' => 'Joko',
                'father_living_status' => 'Hidup',
                'father_last_education' => 'SMK',
                'father_occupation' => 'Programmer',
                'mother_name' => 'Siti',
                'mother_living_status' => 'Hidup',
                'mother_last_education' => 'SMK',
                'mother_occupation' => 'Ibu Rumah Tangga',
                'dependents' => 4,
                'phone_number' => '081234567890',
            ],
        ];
        foreach ($userData as $key => $val) {
            FamilyInformation::create($val);
        }
    }
}

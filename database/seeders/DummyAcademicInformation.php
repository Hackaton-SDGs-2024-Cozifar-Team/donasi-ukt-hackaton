<?php

namespace Database\Seeders;

use App\Models\AcademicInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyAcademicInformation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'university' => 'Politeknik Negeri Jember',
                'faculty' => 'Teknologi Informasi',
                'study_program' => 'Teknik Informatika',
                'nim' => 'E41221598',
                'study_year' => '2022',
                'now_curriculum' => 2024,
                'last_ipk' => 3.50,
                'now_ukt' => 3000000,
            ],
        ];

        foreach ($userData as $key => $val) {
            AcademicInformation::create($val);
        }
    }
}

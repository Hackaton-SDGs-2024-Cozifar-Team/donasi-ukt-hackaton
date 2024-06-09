<?php

namespace Database\Seeders;

use App\Models\FinancialInformation;
use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyStudent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'id_user' => 1,
                'id_academic_information' => 1,
                'id_family_information' => 1,
                'id_financial_information' => 1,
                'id_additional_information' => 1,
            ],
        ];

        foreach ($userData as $key => $val) {
            student::create($val);
        }
    }
}

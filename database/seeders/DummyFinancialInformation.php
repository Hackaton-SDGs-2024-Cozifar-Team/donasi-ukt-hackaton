<?php

namespace Database\Seeders;

use App\Models\FinancialInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyFinancialInformation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'father_income' => 5000000,
                'proof_father_income' => 'ktp',
                'mother_income' => 4000000,
                'proof_mother_income' => 'ktp',
            ],
        ];

        foreach ($userData as $key => $val) {
            FinancialInformation::create($val);
        }
    }
}

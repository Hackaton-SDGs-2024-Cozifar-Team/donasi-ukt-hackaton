<?php

namespace Database\Seeders;

use App\Models\AdditionalInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyAddtionalInformation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'registrant_ktp' => 'foto KTP',
                'family_card' => 'foto KK',
                'birth_certificate' => 'foto akte kelahiran',
                'sktm' => 'foto sktm',
                'lant_certificate' => 'foto surat tanah',
                'vehicle_stnk' => 'foto stnk',
                'house_from_outside' => 'foto rumah tampak luar',
                'house_from_inside' => 'foto rumah tampak dalam',
            ],
        ];

        foreach ($userData as $key => $val) {
            AdditionalInformation::create($val);
        }
    }
}

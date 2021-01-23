<?php

use App\SatgasLecturer;
use Illuminate\Database\Seeder;

class SatgasLecturerSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'satgas_id'             => 1,
                'nama'           => 'Dosen',
                'nik'          => '20010014',
                'keterangan'       => 'Dosen IMT',
                
            ],
        ];

        SatgasLecturer::insert($users);
    }
}

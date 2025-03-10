<?php

namespace Database\Seeders;

use App\Models\Pejabat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PejabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pejabat::create([
            'nama'      => 'Setiawan Budi Cahyono, S.H., M.Hum.',
            'pangkat'   => 'Jaksa Utama Pratama',
            'NIP'       => '197401071993031002',
            'jabatan'   => 'Jaksa Utama Pratama'
        ]);

        Pejabat::create([
            'nama'      => 'Hutamin, S.H., M.H.',
            'pangkat'   => 'Jaksa Utama Pratama',
            'NIP'       => '196910111990031003',
            'jabatan'   => 'Jaksa Utama Pratama'
        ]);
    }
}

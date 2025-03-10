<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petugas::create([
            'nama'      => 'Deny Sulisdyantoro',
            'pangkat'   => 'Ahli Pertama',
            'NIP'       => '009988',
            'jabatan'   => 'Ahli Pertama'
        ]);

        Petugas::create([
            'nama'      => 'Irwan Hariyanto',
            'pangkat'   => 'Ahli Kedua',
            'NIP'       => '009977',
            'jabatan'   => 'Ahli Kedua'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'      => 'Yulika',
            'pangkat'   => 'Pengadministrasi Persuratan',
            'nip'       => '1234567890123456',
            'jabatan'   => 'Admin Persuratan',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('Password@admin'),
        ]);
        $admin->assignRole('Admin');

        $admin = User::create([
            'name'      => 'Gifari',
            'pangkat'   => 'User Persuratan',
            'nip'       => '1234567890123490',
            'jabatan'   => 'User Persuratan',
            'email'     => 'user@gmail.com',
            'password'  => Hash::make('Password@user'),
        ]);
        $admin->assignRole('User');

        $admin = User::create([
            'name'      => 'Irawan Hariyanto',
            'pangkat'   => 'Ahli Persuratan',
            'nip'       => '1234567890123480',
            'jabatan'   => 'Ahli Persuratan',
            'email'     => 'ahli@gmail.com',
            'password'  => Hash::make('Password@ahli'),
        ]);
        $admin->assignRole('Ahli');

        $admin = User::create([
            'name'      => 'Hutamin, S.H., M.H.',
            'pangkat'   => 'Mutu Persuratan',
            'nip'       => '1234567890123499',
            'jabatan'   => 'Mutu Persuratan',
            'email'     => 'mutu@gmail.com',
            'password'  => Hash::make('Password@mutu'),
        ]);
        $admin->assignRole('Mutu');
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $roleAdmin = Role::where('name', 'Admin')->first();
            $roleUser = Role::where('name', 'User')->first();
            $roleAhli = Role::where('name', 'Ahli')->first();
            $roleMutu = Role::where('name', 'Mutu')->first();

            if (!$roleAdmin || !$roleUser || !$roleAhli || !$roleMutu) {
                $this->command->warn('Beberapa role belum dibuat. Pastikan RoleSeeder sudah dijalankan.');
                return;
            }

            $permission = Permission::firstOrCreate(['name' => 'Dashboard']);
            $permission2 = Permission::firstOrCreate(['name' => 'KPI']);
            $permission3 = Permission::firstOrCreate(['name' => 'FIK']);
            $permission4 = Permission::firstOrCreate(['name' => 'DFK']);
            $permission5 = Permission::firstOrCreate(['name' => 'Input-Persuratan']);
            $permission6 = Permission::firstOrCreate(['name' => 'Daftar-Persuratan']);
            $permission7 = Permission::firstOrCreate(['name' => 'Data-master']);

            $roleAdmin->givePermissionTo([$permission, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7]);
            $roleUser->givePermissionTo([$permission, $permission2, $permission3, $permission4, $permission5, $permission6]);
            $roleAhli->givePermissionTo([$permission, $permission2, $permission4, $permission6]);
            $roleMutu->givePermissionTo([$permission, $permission2, $permission4, $permission6]);

            $user = User::find(1);
            $user2 = User::find(2);
            $user3 = User::find(3);
            $user4 = User::find(4);

            $user->assignRole('Admin');
            $user2->assignRole('User');
            $user3->assignRole('Ahli');
            $user4->assignRole('Mutu');
        }
}

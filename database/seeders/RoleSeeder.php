<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Spatie\Permission\Models\Role;
    use Spatie\Permission\Models\Permission;

    class RoleSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            Role::updateOrCreate(['name' => 'Admin']);
            Role::updateOrCreate(['name' => 'User']);
            Role::updateOrCreate(['name' => 'Ahli']);
            Role::updateOrCreate(['name' => 'Mutu']);
        }
    }
?>

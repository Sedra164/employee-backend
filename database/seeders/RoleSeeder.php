<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = new Role();
        $superAdmin->name='super_admin';
        $superAdmin->save();
        $adminRole =new Role();
        $adminRole->name='admin';
        $adminRole->save();
        $sectionAdminRole=new Role();
        $sectionAdminRole->name='section_admin';
        $sectionAdminRole->save();
        $userRole = new Role();
        $userRole->name='user';
        $userRole->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = new User();
        $superAdmin->user_name='superAdmin';
        $superAdmin->email='admin@employee.com';
        $superAdmin->password='12345678';
        $superAdmin->first_name='super';
        $superAdmin->last_name='Admin';
        $superAdmin->phone='+963963852741';
        $superAdmin->idNumber='12345678923443342';
        $superAdmin->assignRole('super_admin');
        $superAdmin->save();

        $admin=new User();
        $admin->user_name='admin';
        $admin->email='admin@gmail.com';
        $admin->password='223344556677';
        $admin->first_name='admin';
        $admin->last_name='Admin';
        $admin->phone='+963948355342';
        $admin->idNumber='0023363654424242';
        $admin->assignRole('admin');
        $admin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='sectionAdmin';
        $sectionAdmin->email='section_admin@gmail.com';
        $sectionAdmin->password='246810121416';
        $sectionAdmin->first_name='section';
        $sectionAdmin->last_name='admin';
        $sectionAdmin->phone='+963984356242';
        $sectionAdmin->idNumber='002435353635362772';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

    }
}

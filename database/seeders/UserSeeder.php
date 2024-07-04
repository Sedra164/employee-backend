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
        $admin->user_name='Rami ';
        $admin->email='RamiBabilly@gmail.com';
        $admin->password='4567101112';
        $admin->first_name='Rami';
        $admin->last_name='babilly';
        $admin->phone='+963943567852';
        $admin->idNumber='004522001542';
        $admin->assignRole('admin');
        $admin->save();









        $sectionAdmin=new User();
        $sectionAdmin->user_name='Riyad';
        $sectionAdmin->email='Riyad.sheck_debs@gmail.com';
        $sectionAdmin->password='5410115422';
        $sectionAdmin->first_name='Riyad';
        $sectionAdmin->last_name='sheck_debs';
        $sectionAdmin->phone='+963981124890';
        $sectionAdmin->idNumber='002457800441';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='khaled';
        $sectionAdmin->email='khaledKaisar@gmail.com';
        $sectionAdmin->password='444721774';
        $sectionAdmin->first_name='khaled';
        $sectionAdmin->last_name='kaisar';
        $sectionAdmin->phone='+963957433210';
        $sectionAdmin->idNumber='002677245660';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


    }
}

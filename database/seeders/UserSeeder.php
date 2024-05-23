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

    }
}

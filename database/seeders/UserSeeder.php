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
        $superAdmin->email='admin@hitbitz.com';
        $superAdmin->password='12345678';
        $superAdmin->first_name='super';
        $superAdmin->last_name='Admin';
        $superAdmin->phone='+963963852741';
        $superAdmin->assignRole('super_admin');
        $superAdmin->save();
    }
}

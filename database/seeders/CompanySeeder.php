<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company=new Company();
        $company->name='AlKhalema School';
        $company->type='educational';
        $company->email='Ramibabilly@gmail.com';
        $company->address='aleppo-alsyrian';
        $company->website='Manzomet_Albabilly@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963944567698';
        $company->manager_id='2';
        $company->save();
    }
}

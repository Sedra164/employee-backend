<?php

namespace Database\Seeders;

use App\Models\sectionCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sectionCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='1';
        $sectionCompany->section_id='1';
        $sectionCompany->section_manager_id='3';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='1';
        $sectionCompany->section_id='2';
        $sectionCompany->section_manager_id='4';
        $sectionCompany->save();


    }
}

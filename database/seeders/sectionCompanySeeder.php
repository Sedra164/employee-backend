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
        $sectionCompany->section_manager_id='8';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='1';
        $sectionCompany->section_id='2';
        $sectionCompany->section_manager_id='9';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='2';
        $sectionCompany->section_id='1';
        $sectionCompany->section_manager_id='10';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='2';
        $sectionCompany->section_id='3';
        $sectionCompany->section_manager_id='11';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='3';
        $sectionCompany->section_id='3';
        $sectionCompany->section_manager_id='12';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='3';
        $sectionCompany->section_id='1';
        $sectionCompany->section_manager_id='14';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='3';
        $sectionCompany->section_id='4';
        $sectionCompany->section_manager_id='13';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='4';
        $sectionCompany->section_id='3';
        $sectionCompany->section_manager_id='15';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='4';
        $sectionCompany->section_id='1';
        $sectionCompany->section_manager_id='16';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='4';
        $sectionCompany->section_id='4';
        $sectionCompany->section_manager_id='17';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='5';
        $sectionCompany->section_id='3';
        $sectionCompany->section_manager_id='18';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='5';
        $sectionCompany->section_id='1';
        $sectionCompany->section_manager_id='19';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='5';
        $sectionCompany->section_id='4';
        $sectionCompany->section_manager_id='20';
        $sectionCompany->save();

        $sectionCompany=new sectionCompany();
        $sectionCompany->company_id='6';
        $sectionCompany->section_id='3';
        $sectionCompany->section_manager_id='21';
        $sectionCompany->save();

    }
}

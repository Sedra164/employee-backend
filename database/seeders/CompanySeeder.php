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
        $company->confirm='1';
        $company->save();

        $company=new Company();
        $company->name='Raizer Tech';
        $company->type='iformation-technology';
        $company->email='info@raizer.tech';
        $company->address='aleppo-aljamilia';
        $company->website='RaizerTECH@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963994053207';
        $company->manager_id='3';
        $company->confirm='1';
        $company->save();

        $company=new Company();
        $company->name='Beetronix';
        $company->type='iformation-technology';
        $company->email='info@beetronix.com';
        $company->address='aleppo-almouhafaza';
        $company->website='Beetronix@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963993327101';
        $company->manager_id='4';
        $company->confirm='1';
        $company->save();

        $company=new Company();
        $company->name='Parallax';
        $company->type='iformation-technology';
        $company->email='Parallaxpd@gmail.com';
        $company->address='aleppo-nazlt-adoneis';
        $company->website='Parallax@facebook.com';
        $company->phone='212288399';
        $company->mobile='+963993327100';
        $company->manager_id='5';
        $company->confirm='1';
        $company->save();

        $company=new Company();
        $company->name='CRAFT LAB';
        $company->type='iformation-technology';
        $company->email='craftlab.sy@gmail.com';
        $company->address='aleppo-aljamilia';
        $company->website='Craft.Lab@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963934599215';
        $company->manager_id='6';
        $company->confirm='0';
        $company->save();

        $company=new Company();
        $company->name='Ulu Tech';
        $company->type='iformation-technology';
        $company->email='ifo.ulutech@gmail.com';
        $company->address='aleppo-alfurqan';
        $company->website='Ulutech@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933005306';
        $company->manager_id='7';
        $company->confirm='1';
        $company->save();

    }
}

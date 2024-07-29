<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $job=new Job();
        $job->title='Backend Django developer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='2';
        $job->Age='22';
        $job->gender='male';
        $job->salary='3000000';
        $job->section_company_id='4';
        $job->save();
        // $job->addMedia('1716373259_432696928.png')->toMediaCollection('jobs');

        $job=new job();
        $job->title='Database Administrator';
        $job->jobDescription='hour work 9-4/saturday off/transportation/ flexibility in work';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='5';
        $job->save();
        // $job->addMedia('1717269635_896946866.png')->toMediaCollection('jobs');

        $job=new job();
        $job->title='Application developer android';
        $job->jobDescription='hour work 9-4/saturday off/transportation/ flexibility in work';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='2700000';
        $job->section_company_id='8';
        $job->save();
        // $job->addMedia('1717267627_166756252.png')->toMediaCollection('jobs');

        $job=new job();
        $job->title='Ui/Ux design';
        $job->jobDescription='hour work 10-6/friday off';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='11';
        $job->save();
        // $job->addMedia('1716494102_600135052.png')->toMediaCollection('jobs');

        $job=new job();
        $job->title='Backend Django developer';
        $job->jobDescription='hour work 10-8/friday off';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='3500000';
        $job->section_company_id='14';
        $job->save();
        // $job->addMedia('1717269348_607146267.png')->toMediaCollection('jobs');

        $job=new job();
        $job->title='Database Administrator';
        $job->jobDescription='hour work 9-4/saturday off/transportation';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='8';
        $job->save();
        // $job->addMedia('1716494191_610353203.png')->toMediaCollection('jobs');

        $job=new job();
        $job->title='Database Administrator';
        $job->jobDescription='hour work 10-8/friday off';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='11';
        $job->save();
        // $job->addMedia('1716494102_600135052.png')->toMediaCollection('jobs');


        $job=new job();
        $job->title='Application developer android';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='2400000';
        $job->section_company_id='4';
        $job->save();
        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

//تعديل section_company_id كرقم
        
         $job=new job();
         $job->title='English teacher ';
         $job->jobDescription='hour work 8-12/friday and saturday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='500000';
         $job->section_company_id='20';
         $job->save();
        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        
         $job=new job();
         $job->title='Science teacher ';
         $job->jobDescription='hour work 8-12/friday and saturday off /comfortable working environment';
         $job->count='1';
         $job->Age='25';
         $job->gender='null';
         $job->salary='600000';
         $job->section_company_id='18';
         $job->save();
        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        
    


        
         $job=new job();
         $job->title='Physic teacher ';
         $job->jobDescription='hour work 10-6/friday and saturday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='400000';
         $job->section_company_id='2';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        
        $job=new job();
         $job->title='Pharmacist ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='22';
         $job->save();
        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

        
        $job=new job();
         $job->title='Pediatrician ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='22';
         $job->save();
        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

        
        $job=new job();
         $job->title='Pharmacist ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='24';
         $job->save();
        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        $job=new job();
         $job->title='Senior surgeon ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='24';
         $job->save();
        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        
        $job=new job();
         $job->title='Gastroenterologist';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='35';
         $job->gender='null';
         $job->salary='4000000';
         $job->section_company_id='24';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        
         $job=new job();
         $job->title='Anesthesiologist';
         $job->jobDescription='hour work 10-6/friday off /';
         $job->count='1';
         $job->Age='30';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='26';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        
         $job=new job();
         $job->title='Gynecologist ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='3500000';
         $job->section_company_id='28';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


        
         $job=new job();
         $job->title='Application developer android';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='36';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

        
         $job=new job();
         $job->title='Full stack developer ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='39';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

         $job=new job();
         $job->title='Backend Django developer';
         $job->jobDescription='hour work 10-8/friday off';
         $job->count='1';
         $job->Age='30';
         $job->gender='null';
         $job->salary='3000000';
         $job->section_company_id='36';
         $job->save();
         // $job->addMedia('1717269348_607146267.png')->toMediaCollection('jobs');
        
         $job=new job();
         $job->title='Flutter developer ';
         $job->jobDescription='hour work 10-8/friday off';
         $job->count='1';
         $job->Age='25';
         $job->gender='null';
         $job->salary='3500000';
         $job->section_company_id='14';
         $job->save();
         // $job->addMedia('1717269348_607146267.png')->toMediaCollection('jobs');


         $job=new job();
         $job->title='Flutter developer ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2000000';
         $job->section_company_id='39';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

        
         $job=new job();
         $job->title='Architecture engineer ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='25';
         $job->gender='null';
         $job->salary='2000000';
         $job->section_company_id='52';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

        
        $job=new job();
         $job->title='Architecture engineer ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
         $job->salary='2400000';
         $job->section_company_id='54';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');

        
        $job=new job();
        $job->title='Site engineer ';
         $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
         $job->count='1';
         $job->Age='23';
         $job->gender='null';
        $job->salary='1000000';
         $job->section_company_id='52';
         $job->save();
         // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');


         $job=new job();
         $job->title='Civil engineer';
          $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
          $job->count='1';
          $job->Age='23';
          $job->gender='null';
          $job->salary='1000000';
          $job->section_company_id='52';
          $job->save();
          // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');
   }
}

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
        //TODO
//         $job->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('jobs');

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
//        // $job->addMedia('1716454208_580845740.png')->toMediaCollection('jobs');
    }
}

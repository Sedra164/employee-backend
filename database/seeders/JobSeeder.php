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

         $job->addMedia((storage_path('app/public/amin.jpg')))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Database Administrator';
        $job->jobDescription='hour work 9-4/saturday off/transportation/ flexibility in work';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='5';
        $job->save();
         $job->addMedia((storage_path('app/public/amin.jpg')))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Application developer android';
        $job->jobDescription='hour work 9-4/saturday off/transportation/ flexibility in work';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='2700000';
        $job->section_company_id='8';
        $job->save();
         $job->addMedia(storage_path('app/public/amin1.jpg'))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Ui/Ux design';
        $job->jobDescription='hour work 10-6/friday off';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='11';
        $job->save();
         $job->addMedia(storage_path('app/public/app3.jpg'))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Backend Django developer';
        $job->jobDescription='hour work 10-8/friday off';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='3500000';
        $job->section_company_id='14';
        $job->save();
         $job->addMedia(storage_path('app/public/bazar.jpg'))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Database Administrator';
        $job->jobDescription='hour work 9-4/saturday off/transportation';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='8';
        $job->save();
         $job->addMedia(storage_path('app/public/book.jpg'))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Database Administrator';
        $job->jobDescription='hour work 10-8/friday off';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='11';
        $job->save();
         $job->addMedia(storage_path('app/public/c#.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Application developer android';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='2400000';
        $job->section_company_id='4';
        $job->save();
         $job->addMedia(storage_path('app/public/ccna.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Application developer android';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2800000';
        $job->section_company_id='36';
        $job->save();
         $job->addMedia(storage_path('app/public/ccna1.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Application developer ios';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='36';
        $job->save();
         $job->addMedia(storage_path('app/public/copp.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Application developer ios';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='4';
        $job->save();
         $job->addMedia(storage_path('app/public/css.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Front end React js developer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='2600000';
        $job->section_company_id='4';
        $job->save();
         $job->addMedia(storage_path('app/public/css1.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Front end React js developer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='8';
        $job->save();
         $job->addMedia(storage_path('app/public/cyper.jpg'))->preservingOriginal()->toMediaCollection('jobs');





        $job=new job();
        $job->title='Flutter developer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2900000';
        $job->section_company_id='11';
        $job->save();
         $job->addMedia(storage_path('app/public/cyber1.jpg'))->preservingOriginal()->toMediaCollection('jobs');





        $job=new job();
        $job->title='Flutter developer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='39';
        $job->save();
         $job->addMedia(storage_path('app/public/default.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Back end Asp.net developer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='14';
        $job->save();
         $job->addMedia(storage_path('app/public/e.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Back end Asp.net developer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='3500000';
        $job->section_company_id='39';
        $job->save();
         $job->addMedia(storage_path('app/public/ec.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Back end node js developer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2700000';
        $job->section_company_id='8';
        $job->save();
         $job->addMedia(storage_path('app/public/employ2.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Back end node js developer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='3300000';
        $job->section_company_id='39';
        $job->save();
         $job->addMedia(storage_path('app/public/flutter.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Back end node js developer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='14';
        $job->save();
         $job->addMedia(storage_path('app/public/flutter1.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Application developer android';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2400000';
        $job->section_company_id='42';
        $job->save();
         $job->addMedia(storage_path('app/public/html.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Network security specialist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='4000000';
        $job->section_company_id='48';
        $job->save();
         $job->addMedia(storage_path('app/public/html2.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Front end developer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='24';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='11';
        $job->save();
         $job->addMedia(storage_path('app/public/icdl.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Network security specialist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='4500000';
        $job->section_company_id='45';
        $job->save();
         $job->addMedia(storage_path('app/public/iii.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Network security specialist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='8';
        $job->save();
         $job->addMedia(storage_path('app/public/im.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='IT administrator ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='45';
        $job->save();
         $job->addMedia(storage_path('app/public/jobss1.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='IT administrator ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='53';
        $job->save();
         $job->addMedia(storage_path('app/public/js.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Ui/Ux design ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='48';
        $job->save();
         $job->addMedia(storage_path('app/public/js1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Ui/Ux design ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2400000';
        $job->section_company_id='42';
        $job->save();
         $job->addMedia(storage_path('app/public/log.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Application developer android';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2800000';
        $job->section_company_id='42';
        $job->save();
         $job->addMedia(storage_path('app/public/log1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Gynecologist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='35';
        $job->gender='null';
        $job->salary='5000000';
        $job->section_company_id='22';
        $job->save();
         $job->addMedia(storage_path('app/public/log3.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Gynecologist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='5000000';
        $job->section_company_id='34';
        $job->save();
         $job->addMedia(storage_path('app/public/log3.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Senior surgeon ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='35';
        $job->gender='null';
        $job->salary='4000000';
        $job->section_company_id='24';
        $job->save();
         $job->addMedia(storage_path('app/public/log7.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Gastroenterologist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='4500000';
        $job->section_company_id='28';
        $job->save();
         $job->addMedia(storage_path('app/public/machine.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Anesthesiologist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='26';
        $job->save();
         $job->addMedia(storage_path('app/public/machine1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Neurologist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='26';
        $job->save();
         $job->addMedia(storage_path('app/public/map.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Neurologist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='4500000';
        $job->section_company_id='34';
        $job->save();
         $job->addMedia(storage_path('app/public/markting.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Pediatrician ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='22';
        $job->save();
         $job->addMedia(storage_path('app/public/max1.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='General surgery doctor ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='5500000';
        $job->section_company_id='32';
        $job->save();
         $job->addMedia(storage_path('app/public/nlp.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='General surgery doctor ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='6000000';
        $job->section_company_id='30';
        $job->save();
         $job->addMedia(storage_path('app/public/node.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='General doctor ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='26';
        $job->save();
         $job->addMedia(storage_path('app/public/nodejs1.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Cardiologist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='5000000';
        $job->section_company_id='24';
        $job->save();
         $job->addMedia(storage_path('app/public/php.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Pharmacist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='22';
        $job->save();
         $job->addMedia(storage_path('app/public/python.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Pharmacist ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='30';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='30';
        $job->save();
         $job->addMedia(storage_path('app/public/python2.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Nurse ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1200000';
        $job->section_company_id='22';
        $job->save();
         $job->addMedia(storage_path('app/public/revit.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Nurse ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='28';
        $job->save();
         $job->addMedia(storage_path('app/public/revit2.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Nurse ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='30';
        $job->save();
         $job->addMedia(storage_path('app/public/rino.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Civil engineer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='52';
        $job->save();
         $job->addMedia(storage_path('app/public/w7.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Civil engineer';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='24';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='59';
        $job->save();
         $job->addMedia(storage_path('app/public/wirless.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Site engineer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='54';
        $job->save();
         $job->addMedia(storage_path('app/public/wirless.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Architecture engineer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='4000000';
        $job->section_company_id='61';
        $job->save();
         $job->addMedia(storage_path('app/public/w7.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Architecture engineer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='3400000';
        $job->section_company_id='52';
        $job->save();
         $job->addMedia(storage_path('app/public/revit2.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Architecture implementation manager ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='54';
        $job->save();
         $job->addMedia(storage_path('app/public/revit.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Interior designer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='61';
        $job->save();
         $job->addMedia(storage_path('app/public/python2.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Interior designer ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2500000';
        $job->section_company_id='57';
        $job->save();
         $job->addMedia(storage_path('app/public/python.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Assistant architecture ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='59';
        $job->save();
         $job->addMedia(storage_path('app/public/nodejs1.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Physic teacher ';
        $job->jobDescription='hour work 8-12/friday and saturday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='2';
        $job->save();
         $job->addMedia(storage_path('app/public/php.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Chemistry teacher ';
        $job->jobDescription='hour work 10-6/friday and saturday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='2';
        $job->save();
         $job->addMedia(storage_path('app/public/node.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Science teacher ';
        $job->jobDescription='hour work 8-12/friday and saturday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1900000';
        $job->section_company_id='2';
        $job->save();
         $job->addMedia(storage_path('app/public/nlp.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Science teacher ';
        $job->jobDescription='hour work 8-12/friday and saturday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='18';
        $job->save();
         $job->addMedia(storage_path('app/public/max1.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Physic teacher ';
        $job->jobDescription='hour work 8-1/friday and saturday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='3000000';
        $job->section_company_id='18';
        $job->save();
         $job->addMedia(storage_path('app/public/markting.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='English teacher ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='2';
        $job->save();
         $job->addMedia(storage_path('app/public/map.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='English teacher ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='20';
        $job->save();
         $job->addMedia(storage_path('app/public/machine.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='French teacher ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='20';
        $job->save();
         $job->addMedia(storage_path('app/public/machine1.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='French teacher ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='22';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='2';
        $job->save();
         $job->addMedia(storage_path('app/public/log7.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='23';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='58';
        $job->save();
         $job->addMedia(storage_path('app/public/log3.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='1';
        $job->save();
         $job->addMedia(storage_path('app/public/log1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='60';
        $job->save();
         $job->addMedia(storage_path('app/public/log.jpg'))->preservingOriginal()->toMediaCollection('jobs');




        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='9';
        $job->save();
         $job->addMedia(storage_path('app/public/js1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1500000';
        $job->section_company_id='21';
        $job->save();
         $job->addMedia(storage_path('app/public/js.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='25';
        $job->save();
         $job->addMedia(storage_path('app/public/jobss1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='27';
        $job->save();
         $job->addMedia(storage_path('app/public/im.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Accountant ';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='12';
        $job->save();
         $job->addMedia(storage_path('app/public/iii.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Supervisor';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='53';
        $job->save();
         $job->addMedia(storage_path('app/public/icdl.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Supervisor';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='46';
        $job->save();
         $job->addMedia(storage_path('app/public/html2.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Supervisor';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='900000';
        $job->section_company_id='33';
        $job->save();
         $job->addMedia(storage_path('app/public/html.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Supervisor';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='25';
        $job->gender='null';
        $job->salary='2000000';
        $job->section_company_id='19';
        $job->save();
         $job->addMedia(storage_path('app/public/flutter1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Supervisor';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='40';
        $job->save();
         $job->addMedia(storage_path('app/public/flutter.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Secretary';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='1';
        $job->save();
         $job->addMedia(storage_path('app/public/employ2.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Secretary';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='23';
        $job->save();
         $job->addMedia(storage_path('app/public/ec.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Secretary';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='27';
        $job->save();
         $job->addMedia(storage_path('app/public/e.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Secretary';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='51';
        $job->save();
         $job->addMedia(storage_path('app/public/default.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Secretary';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='56';
        $job->save();
         $job->addMedia(storage_path('app/public/cyper.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Secretary';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='33';
        $job->save();
         $job->addMedia(storage_path('app/public/cyber1.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Receptionist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='17';
        $job->save();
         $job->addMedia(storage_path('app/public/css.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Receptionist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='17';
        $job->save();
         $job->addMedia(storage_path('app/public/css1.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Receptionist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='58';
        $job->save();
         $job->addMedia(storage_path('app/public/copp.jpg'))->preservingOriginal()->toMediaCollection('jobs');



        $job=new job();
        $job->title='Receptionist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='53';
        $job->save();
         $job->addMedia(storage_path('app/public/ccna.jpg'))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Receptionist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='23';
        $job->save();
         $job->addMedia(storage_path('app/public/ccna1.jpg'))->preservingOriginal()->toMediaCollection('jobs');


        $job=new job();
        $job->title='Receptionist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='27';
        $job->save();
         $job->addMedia(storage_path('app/public/c#.jpg'))->preservingOriginal()->toMediaCollection('jobs');

        $job=new job();
        $job->title='Receptionist';
        $job->jobDescription='hour work 10-6/friday off /comfortable working environment';
        $job->count='1';
        $job->Age='20';
        $job->gender='null';
        $job->salary='1000000';
        $job->section_company_id='29';
        $job->save();
        $job->addMedia(storage_path('app/public/book.jpg'))->preservingOriginal()->toMediaCollection('jobs');












    }
}

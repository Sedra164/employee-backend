<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='medicine';
        $education->specialization_name='';
        $education->form_id='';
        $education->save();


        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='medicine';
        $education->specialization='';
        $education->form_id='';
        $education->save();


        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='medicine';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name=' Pharmacy';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name=' Pharmacy';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='Pharmacy';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='information  Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='information  Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='information  Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='civil  Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='civil  Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='civil  Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

                
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Architecture Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Architecture Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();


        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='Architecture Engineering';
        $education->specialization='';
        $education->form_id='';
        $education->save();

                
        $education=new Education();
        $education->certificate='certificate';
        $education->certificate_name='Technica Engineering Institute';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Sciences';
        $education->specialization='';
        $education->form_id='';
        $education->save();


        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Sciences';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='Sciences';
        $education->specialization='';
        $education->form_id='';
        $education->save();

                
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Arts and Humanties';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Arts and Humanties';
        $education->specialization='';
        $education->form_id='';
        $education->save();


        $education=new Education();
        $education->certificate='certificate';
        $education->certificate_name='Administration Institute';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Economics';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Economics';
        $education->specialization='';
        $education->form_id='';
        $education->save();
        

        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Nursing School';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        

        $education=new Education();
        $education->certificate='certificate';
        $education->certificate_name='center Education';
        $education->specialization='';
        $education->form_id='';
        $education->save();

        
    }
}

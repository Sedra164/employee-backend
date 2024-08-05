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
        $education->save();


        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='medicine';
        $education->save();


        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='medicine';
        $education->save();

        
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name=' Pharmacy';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name=' Pharmacy';
        $education->save();

        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='Pharmacy';
        $education->save();

        
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='information  Engineering';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='information  Engineering';
        $education->save();

        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='information  Engineering';
        $education->save();

        
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='civil  Engineering';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='civil  Engineering';
        $education->save();

        
        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='civil  Engineering';
        $education->save();

                
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Architecture Engineering';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Architecture Engineering';
        $education->save();


        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='Architecture Engineering';
        $education->save();

                
        $education=new Education();
        $education->certificate='certificate';
        $education->certificate_name='Technica Engineering Institute';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Sciences';
        $education->save();


        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Sciences';
        $education->save();

        $education=new Education();
        $education->certificate='PHD';
        $education->certificate_name='Sciences';
        $education->save();

                
        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Arts and Humanties';
        $education->save();

        
        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Arts and Humanties';
        $education->save();


        $education=new Education();
        $education->certificate='certificate';
        $education->certificate_name='Administration Institute';
        $education->save();

        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Economics';
        $education->save();

        $education=new Education();
        $education->certificate='Master';
        $education->certificate_name='Economics';
        $education->save();
        

        $education=new Education();
        $education->certificate='Bachelors';
        $education->certificate_name='Nursing School';
        $education->save();

        

        $education=new Education();
        $education->certificate='certificate';
        $education->certificate_name='center Education';
        $education->save();

        
    }
}

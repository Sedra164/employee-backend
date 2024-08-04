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
        $education->scientific_degree='';
        $education->specialization='';
        $education->year='';
        $education->form_id='';
        $education->save();
    }
}

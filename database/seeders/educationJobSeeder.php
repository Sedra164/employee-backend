<?php

namespace Database\Seeders;

use App\Models\educationJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class educationJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educationJob=new educationJob();
        $educationJob->education_id='';
        $educationJob->job_id='';
        $educationJob->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\skillJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class skillJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skillJob=new skillJob();
        $skillJob->skill_id='';
        $skillJob->job_id='';
        $skillJob->save();
    }
}

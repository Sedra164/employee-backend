<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section=new Section();
        $section->name='administrative';
        $section->save();

        $section=new Section();
        $section->name='educational';
        $section->save();

        $section=new Section();
        $section->name='technique';
        $section->save();

        $section=new Section();
        $section->name='marketing';
        $section->save();

    }
}

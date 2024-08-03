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
        $section->name='Administrative';
        $section->save();
//      $section->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('sections');

        $section=new Section();
        $section->name='Educational';
        $section->save();
//      $section->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('sections');


        $section=new Section();
        $section->name='Technique';
        $section->save();
//      $section->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('sections');

        $section=new Section();
        $section->name='Marketing';
        $section->save();
        //      $section->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('sections');

        $section=new Section();
        $section->name='Engineering';
        $section->save();
        //      $section->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('sections');

        $section=new Section();
        $section->name='medical';
        $section->save();
//      $section->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('sections');


    }
}

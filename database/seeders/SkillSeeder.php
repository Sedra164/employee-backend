<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skill=new Skill();
        $skill-> language='Arabic';
        $skill-> otherSkills='icdl comunication';
        $skill-> year='1';
        $skill->save();

        $skill=new Skill();
        $skill-> language='english';
        $skill-> otherSkills='icdl comunication';
        $skill-> year='1';
        $skill->save();

        
        $skill=new Skill();
        $skill-> language='arabic';
        $skill-> otherSkills='managerail icdl';
        $skill-> year='0';
        $skill->save();

        $skill=new Skill();
        $skill-> language='french';
        $skill-> otherSkills='icdl comunication';
        $skill-> year='2';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='html css java comunication';
        $skill-> year='7';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='RestFull APIs dart comunication';
        $skill-> year='2';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='vc-code firebase php MySQL comunication';
        $skill-> year='4';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='express.js';
        $skill-> year='3';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='react native php css html';
        $skill-> year='4';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='php json MySQL java script';
        $skill-> year='3';
        $skill->save();

        
        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='php java script firebase';
        $skill-> year='2';
        $skill->save();

        
        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='paython postgreSQL RestFul.API';
        $skill-> year='3';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='html java json';
        $skill-> year='0';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='Managerail icdl comunication';
        $skill-> year='3';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='PgMP icdl comunication';
        $skill-> year='5';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='Figma AdopeXd graphic design';
        $skill-> year='3';
        $skill->save();

        
        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='Figma AdopeXd graphic design';
        $skill-> year='3';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='AdopeXd graphic design';
        $skill-> year='2';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='Figma AutoCAD ';
        $skill-> year='3';
        $skill->save();

        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='NCARB';
        $skill-> year='3';
        $skill->save();


        
        $skill=new Skill();
        $skill-> language='arabic english';
        $skill-> otherSkills='Revit program NCARB';
        $skill-> year='3';
        $skill->save();


    }


}

<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $company=new Company();
        $company->name='AlKhalema School';
        $company->type='educational';
        $company->email='Ramibabilly@gmail.com';
        $company->address='aleppo-alsyrian';
        $company->website='Manzomet_Albabilly@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963944567698';
        $company->manager_id='2';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Raizer Tech';
        $company->type='iformation-technology';
        $company->email='info@raizer.tech';
        $company->address='aleppo-aljamilia';
        $company->website='RaizerTECH@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963994053207';
        $company->manager_id='3';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Beetronix';
        $company->type='iformation-technology';
        $company->email='info@beetronix.com';
        $company->address='aleppo-almouhafaza';
        $company->website='Beetronix@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963993327101';
        $company->manager_id='4';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Parallax';
        $company->type='iformation-technology';
        $company->email='Parallaxpd@gmail.com';
        $company->address='aleppo-nazlt-adoneis';
        $company->website='Parallax@facebook.com';
        $company->phone='212288399';
        $company->mobile='+963993327100';
        $company->manager_id='5';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='CRAFT LAB';
        $company->type='iformation-technology';
        $company->email='craftlab.sy@gmail.com';
        $company->address='aleppo-aljamilia';
        $company->website='Craft.Lab@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963934599215';
        $company->manager_id='6';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Ulu Tech';
        $company->type='iformation-technology';
        $company->email='ifo.ulutech@gmail.com';
        $company->address='aleppo-alfurqan';
        $company->website='Ulutech@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933005306';
        $company->manager_id='7';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='ALawael School';
        $company->type='educational';
        $company->email='ALAWAEL.SCHOOL@gmail.com';
        $company->address='aleppo-alshahbaa';
        $company->website='alawaelschool@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963943598001';
        $company->manager_id='22';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Alnekhbe School';
        $company->type='educational';
        $company->email='alnekhbeSchool@gmail.com';
        $company->address='aleppo-alshahbaa';
        $company->website='alnekhbe1@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963989557701';
        $company->manager_id='23';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Syrian Arab Red Crescent Hospital';
        $company->type='medical';
        $company->email='SyrianArabRedCrescent@gmail.com';
        $company->address='aleppo-alazizzih';
        $company->website='RedCrescent@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+9639633214214';
        $company->manager_id='24';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Alressalh Hospital';
        $company->type='medical';
        $company->email='Alressalh@gmail.com';
        $company->address='aleppo-alrazi';
        $company->website='AlressalhHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963936136130';
        $company->manager_id='25';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Arab Surgical Hospital';
        $company->type='medical';
        $company->email='ArabSurgical@gmail.com';
        $company->address='aleppo-dwarAlkhaldih';
        $company->website='ArabSurgicalhh@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963932676606';
        $company->manager_id='26';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='AL-Hikma Hospital';
        $company->type='medical';
        $company->email='AL-Hikma@gmail.com';
        $company->address='aleppo-shahbaaPark';
        $company->website='AL-HikmaHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963941123346';
        $company->manager_id='27';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Othman Hospital';
        $company->type='medical';
        $company->email='othmanHospital@gmail.com';
        $company->address='aleppo-ashrafia';
        $company->website='=OthmanHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963944001306';
        $company->manager_id='29';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Martini Hospital';
        $company->type='medical';
        $company->email='MartiniHospital@gmail.com';
        $company->address='aleppo-almartini';
        $company->website='martiniHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963997640106';
        $company->manager_id='28';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Almustakbal HOSPITAL';
        $company->type='medical';
        $company->email='Almustakbal@gmail.com';
        $company->address='aleppo-aLhamdaniyeh';
        $company->website='Almustakbalh@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963941933052';
        $company->manager_id='30';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='NP++';
        $company->type='iformation-technology';
        $company->email='NPplusplus@gmail.com';
        $company->address='aleppo-almohafaza';
        $company->website='NP++@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963993227551';
        $company->manager_id='31';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Genius';
        $company->type='iformation-technology';
        $company->email='Genius@gmail.com';
        $company->address='aleppo-alazizzih';
        $company->website='Ulutech@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933005306';
        $company->manager_id='32';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Auto Mata4';
        $company->type='iformation-technology';
        $company->email='AutoMata4@gmail.com';
        $company->address='aleppo-almnshieh';
        $company->website='AutoMata4a@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963932513516';
        $company->manager_id='33';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Ican';
        $company->type='iformation-technology';
        $company->email='IcanBT@gmail.com';
        $company->address='aleppo-shiekhTaha';
        $company->website='I7can@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963997410030';
        $company->manager_id='34';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Halla Technology';
        $company->type='iformation-technology';
        $company->email='HallaTechnology@gmail.com';
        $company->address='aleppo-daretAeziRoad';
        $company->website='HallaTechnology@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963934611933';
        $company->manager_id='35';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Prozan';
        $company->type='iformation-technology';
        $company->email='Prozan@gmail.com';
        $company->address='aleppo-aljamilia';
        $company->website='Prozan@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933290430';
        $company->manager_id='36';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');


        $company=new Company();
        $company->name='Ashter Hospital';
        $company->type='medical';
        $company->email='Ashter@gmail.com';
        $company->address='aleppo-almohafaza';
        $company->website='AshterHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963945123000';
        $company->manager_id='37';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Vertex Group';
        $company->type='Architecture';
        $company->email='VertexRAMA@gmail.com';
        $company->address='aleppo-almohafaza';
        $company->website='Vertex Group@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+96392665627';
        $company->manager_id='38';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Orika Group';
        $company->type='Architecture';
        $company->email='Orika@gmail.com';
        $company->address='aleppo-alshahba';
        $company->website='OrikaGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+96394438929';
        $company->manager_id='39';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Enjaz Group';
        $company->type='Architecture';
        $company->email='Enjazengan@gmail.com';
        $company->address='aleppo-alshahba';
        $company->website='EnjazGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933060302';
        $company->manager_id='40';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Subul Group';
        $company->type='Architecture';
        $company->email='Subulemar@gmail.com';
        $company->address='aleppo-alforqan';
        $company->website='SubulGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963987138773';
        $company->manager_id='41';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Jawad Group';
        $company->type='Architecture';
        $company->email='jawadArchitecture@gmail.com';
        $company->address='aleppo-halabJdidih';
        $company->website='JawadGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933456787';
        $company->manager_id='42';
        $company->confirm='1';
        $company->save();
//      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        $company=new Company();
        $company->name='Bounian Group';
        $company->type='Architecture';
        $company->email='Bounianr@gmail.com';
        $company->address='aleppo-alforqan';
        $company->website='BounianGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963988877173';
        $company->manager_id='43';
        $company->confirm='1';
        $company->save();
        //      $company->addMedia((storage_path('app/public/99.jpg')))->toMediaCollection('companies');

        
        $company=new Company();
        $company->name='ALawael School';
        $company->type='educational';
        $company->email='ALAWAEL.SCHOOL@gmail.com';
        $company->address='aleppo-alshahbaa';
        $company->website='alawaelschool@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963943598001';
        $company->manager_id='22';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Alnekhbe School';
        $company->type='educational';
        $company->email='alnekhbeSchool@gmail.com';
        $company->address='aleppo-alshahbaa';
        $company->website='alnekhbe1@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963989557701';
        $company->manager_id='23';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Syrian Arab Red Crescent Hospital';
        $company->type='medical';
        $company->email='SyrianArabRedCrescent@gmail.com';
        $company->address='aleppo-alazizzih';
        $company->website='RedCrescent@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+9639633214214';
        $company->manager_id='24';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Alressalh Hospital';
        $company->type='medical';
        $company->email='Alressalh@gmail.com';
        $company->address='aleppo-alrazi';
        $company->website='AlressalhHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963936136130';
        $company->manager_id='25';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Arab Surgical Hospital';
        $company->type='medical';
        $company->email='ArabSurgical@gmail.com';
        $company->address='aleppo-dwarAlkhaldih';
        $company->website='ArabSurgicalhh@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963932676606';
        $company->manager_id='26';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='AL-Hikma Hospital';
        $company->type='medical';
        $company->email='AL-Hikma@gmail.com';
        $company->address='aleppo-shahbaaPark';
        $company->website='AL-HikmaHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963941123346';
        $company->manager_id='27';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Othman Hospital';
        $company->type='medical';
        $company->email='othmanHospital@gmail.com';
        $company->address='aleppo-ashrafia';
        $company->website='=OthmanHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963944001306';
        $company->manager_id='29';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Martini Hospital';
        $company->type='medical';
        $company->email='MartiniHospital@gmail.com';
        $company->address='aleppo-almartini';
        $company->website='martiniHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963997640106';
        $company->manager_id='28';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Almustakbal HOSPITAL';
        $company->type='medical';
        $company->email='Almustakbal@gmail.com';
        $company->address='aleppo-aLhamdaniyeh';
        $company->website='Almustakbalh@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963941933052';
        $company->manager_id='30';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='NP++';
        $company->type='iformation-technology';
        $company->email='NPplusplus@gmail.com';
        $company->address='aleppo-almohafaza';
        $company->website='NP++@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963993227551';
        $company->manager_id='31';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Genius';
        $company->type='iformation-technology';
        $company->email='Genius@gmail.com';
        $company->address='aleppo-alazizzih';
        $company->website='Ulutech@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933005306';
        $company->manager_id='32';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Auto Mata4';
        $company->type='iformation-technology';
        $company->email='AutoMata4@gmail.com';
        $company->address='aleppo-almnshieh';
        $company->website='AutoMata4a@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963932513516';
        $company->manager_id='33';
        $company->confirm='1';
        $company->save();

        
        $company=new Company();
        $company->name='Ican';
        $company->type='iformation-technology';
        $company->email='IcanBT@gmail.com';
        $company->address='aleppo-shiekhTaha';
        $company->website='I7can@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963997410030';
        $company->manager_id='34';
        $company->confirm='1';
        $company->save();

          
        $company=new Company();
        $company->name='Halla Technology';
        $company->type='iformation-technology';
        $company->email='HallaTechnology@gmail.com';
        $company->address='aleppo-daretAeziRoad';
        $company->website='HallaTechnology@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963934611933';
        $company->manager_id='35';
        $company->confirm='1';
        $company->save();

          
        $company=new Company();
        $company->name='Prozan';
        $company->type='iformation-technology';
        $company->email='Prozan@gmail.com';
        $company->address='aleppo-aljamilia';
        $company->website='Prozan@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933290430';
        $company->manager_id='36';
        $company->confirm='1';
        $company->save();


          
        $company=new Company();
        $company->name='Ashter Hospital';
        $company->type='medical';
        $company->email='Ashter@gmail.com';
        $company->address='aleppo-almohafaza';
        $company->website='AshterHospital@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963945123000';
        $company->manager_id='37';
        $company->confirm='1';
        $company->save();

          
        $company=new Company();
        $company->name='Vertex Group';
        $company->type='Architecture';
        $company->email='VertexRAMA@gmail.com';
        $company->address='aleppo-almohafaza';
        $company->website='Vertex Group@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+96392665627';
        $company->manager_id='38';
        $company->confirm='1';
        $company->save();

          
        $company=new Company();
        $company->name='Orika Group';
        $company->type='Architecture';
        $company->email='Orika@gmail.com';
        $company->address='aleppo-alshahba';
        $company->website='OrikaGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+96394438929';
        $company->manager_id='39';
        $company->confirm='1';
        $company->save();

          
        $company=new Company();
        $company->name='Enjaz Group';
        $company->type='Architecture';
        $company->email='Enjazengan@gmail.com';
        $company->address='aleppo-alshahba';
        $company->website='EnjazGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933060302';
        $company->manager_id='40';
        $company->confirm='1';
        $company->save();

          
        $company=new Company();
        $company->name='Subul Group';
        $company->type='Architecture';
        $company->email='Subulemar@gmail.com';
        $company->address='aleppo-alforqan';
        $company->website='SubulGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963987138773';
        $company->manager_id='41';
        $company->confirm='1';
        $company->save();


        $company=new Company();
        $company->name='Jawad Group';
        $company->type='Architecture';
        $company->email='jawadArchitecture@gmail.com';
        $company->address='aleppo-halabJdidih';
        $company->website='JawadGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963933456787';
        $company->manager_id='42';
        $company->confirm='1';
        $company->save();


        $company=new Company();
        $company->name='Bounian Group';
        $company->type='Architecture';
        $company->email='Bounianr@gmail.com';
        $company->address='aleppo-alforqan';
        $company->website='BounianGroup@facebook.com';
        $company->phone='don\'t have phone';
        $company->mobile='+963988877173';
        $company->manager_id='43';
        $company->confirm='1';
        $company->save();

    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /** RoleSeeder
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = new User();
        $superAdmin->user_name='superAdmin';
        $superAdmin->email='admin@employee.com';
        $superAdmin->password='12345678';
        $superAdmin->first_name='super';
        $superAdmin->last_name='Admin';
        $superAdmin->phone='+963963852741';
        $superAdmin->idNumber='12345678923443342';
        $superAdmin->assignRole('super_admin');
        $superAdmin->save();


        $admin=new User();
        $admin->user_name='Rami ';
        $admin->email='RamiBabilly@gmail.com';
        $admin->password='4567101112';
        $admin->first_name='Rami';
        $admin->last_name='babilly';
        $admin->phone='+963943567852';
        $admin->idNumber='004522001542';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='daoudRazek ';
        $admin->email='Razekdaoud@gmail.com';
        $admin->password='1151996115';
        $admin->first_name='Razek';
        $admin->last_name='Daoud';
        $admin->phone='+963994053206';
        $admin->idNumber='004522000542';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='abdalrahman ';
        $admin->email='abdalrahmandawara@gmail.com';
        $admin->password='7654321890';
        $admin->first_name='Abdalrahman';
        $admin->last_name='Dawara';
        $admin->phone='+963943946512';
        $admin->idNumber='004522011542';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='tonifarha ';
        $admin->email='tonifarha@gmail.com';
        $admin->password='6543217890';
        $admin->first_name='Toni';
        $admin->last_name='Farha';
        $admin->phone='+963993327110';
        $admin->idNumber='004522001002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='YasserDA ';
        $admin->email='Yaseeerdarouzi@gmail.com';
        $admin->password='5432167890';
        $admin->first_name='Yasser';
        $admin->last_name='Darouzi';
        $admin->phone='+963995701070';
        $admin->idNumber='004522101542';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='ahmadAbdAlrahman ';
        $admin->email='ahmadabdalrahman@gmail.com';
        $admin->password='3214567890';
        $admin->first_name='Ahmad';
        $admin->last_name='Abdalrahman';
        $admin->phone='+9639935230788';
        $admin->idNumber='004524001500';
        $admin->assignRole('admin');
        $admin->save();




        $sectionAdmin=new User();
        $sectionAdmin->user_name='Riyad';
        $sectionAdmin->email='Riyad.sheck_debs@gmail.com';
        $sectionAdmin->password='5410115422';
        $sectionAdmin->first_name='Riyad';
        $sectionAdmin->last_name='sheck_debs';
        $sectionAdmin->phone='+963981124890';
        $sectionAdmin->idNumber='002457800441';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='khaled';
        $sectionAdmin->email='khaledKaisar@gmail.com';
        $sectionAdmin->password='444721774';
        $sectionAdmin->first_name='khaled';
        $sectionAdmin->last_name='kaisar';
        $sectionAdmin->phone='+963957433210';
        $sectionAdmin->idNumber='002677245660';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='aishaALhassan';
        $sectionAdmin->email='aishaalhassan@gmail.com';
        $sectionAdmin->password='321654987';
        $sectionAdmin->first_name='Aisha';
        $sectionAdmin->last_name='Alhassan';
        $sectionAdmin->phone='+963947854882';
        $sectionAdmin->idNumber='002677240000';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='abdalrahmanSH';
        $sectionAdmin->email='abdalrahmanshaiah@gmail.com';
        $sectionAdmin->password='2345987610';
        $sectionAdmin->first_name='Abdalrahman';
        $sectionAdmin->last_name='Shaiah';
        $sectionAdmin->phone='+963991283851';
        $sectionAdmin->idNumber='002677500376';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='Safwan';
        $sectionAdmin->email='safwanIbrahim@gmail.com';
        $sectionAdmin->password='5432167890';
        $sectionAdmin->first_name='Safwan';
        $sectionAdmin->last_name='Ibrahim';
        $sectionAdmin->phone='+963941784733';
        $sectionAdmin->idNumber='002612688912';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='ayaDA';
        $sectionAdmin->email='ayadawara@gmail.com';
        $sectionAdmin->password='5647382910';
        $sectionAdmin->first_name='Aya';
        $sectionAdmin->last_name='Dawara';
        $sectionAdmin->phone='+963943698866';
        $sectionAdmin->idNumber='002455688823';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='nissrinSH';
        $sectionAdmin->email='nisrenshmissy@gmail.com';
        $sectionAdmin->password='2121998212';
        $sectionAdmin->first_name='Nissrin';
        $sectionAdmin->last_name='Shmissy';
        $sectionAdmin->phone='+963981699915';
        $sectionAdmin->idNumber='002678809345';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='abdalhadiS';
        $sectionAdmin->email='abdalhadissabagh@gmail.com';
        $sectionAdmin->password='3847562910';
        $sectionAdmin->first_name='Abdalhadi';
        $sectionAdmin->last_name='Sabagh';
        $sectionAdmin->phone='+963981695515';
        $sectionAdmin->idNumber='002855944355';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='gadaG';
        $sectionAdmin->email='gadajafer@gmail.com';
        $sectionAdmin->password='4431131169';
        $sectionAdmin->first_name='Gada';
        $sectionAdmin->last_name='Jafer';
        $sectionAdmin->phone='+9639574666700';
        $sectionAdmin->idNumber='002754245660';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='mohammedDA';
        $sectionAdmin->email='mohammeddaoud@gmail.com';
        $sectionAdmin->password='6649003217';
        $sectionAdmin->first_name='Mohammed';
        $sectionAdmin->last_name='Daoud';
        $sectionAdmin->phone='+963997633210';
        $sectionAdmin->idNumber='002699000761';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='khaled';
        $sectionAdmin->email='khaledfattal@gmail.com';
        $sectionAdmin->password='1671988123';
        $sectionAdmin->first_name='khaled';
        $sectionAdmin->last_name='Fattal';
        $sectionAdmin->phone='+963994327001';
        $sectionAdmin->idNumber='002450983660';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='husseinMA';
        $sectionAdmin->email='husseinmassri@gmail.com';
        $sectionAdmin->password='7731954444';
        $sectionAdmin->first_name='Hussein';
        $sectionAdmin->last_name='Almassri';
        $sectionAdmin->phone='+963950320320';
        $sectionAdmin->idNumber='002245160060';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='jalalsido';
        $sectionAdmin->email='jalalsido@gmail.com';
        $sectionAdmin->password='3328871980';
        $sectionAdmin->first_name='Jalal';
        $sectionAdmin->last_name='Sido';
        $sectionAdmin->phone='+963957433266';
        $sectionAdmin->idNumber='002477921160';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='abdDAR';
        $sectionAdmin->email='abdDarozi@gmail.com';
        $sectionAdmin->password='8843290901';
        $sectionAdmin->first_name='Abd';
        $sectionAdmin->last_name='Darozi';
        $sectionAdmin->phone='+963943495621';
        $sectionAdmin->idNumber='002666330232';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


    }
}

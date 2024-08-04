<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /** RoleSeeder
     * Run the database seeds.
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
        $admin->password='45671112';
        $admin->first_name='Rami';
        $admin->last_name='babilly';
        $admin->phone='+963993567852';
        $admin->idNumber='004802001542';
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


        $admin=new User();
        $admin->user_name='AhmadZherAldin';
        $admin->email='zheraldin@gmail.com';
        $admin->password='123555';
        $admin->first_name='Ahmed';
        $admin->last_name='ZherAldin';
        $admin->phone='0943598001';
        $admin->idNumber='004677001542';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='FadiAbodan';
        $admin->email='FadiAbodan@gmail.com';
        $admin->password='123444';
        $admin->first_name='fadi';
        $admin->last_name='abodan';
        $admin->phone='0944399754';
        $admin->idNumber='004528392842';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='AhmadAlshiekh';
        $admin->email='AhmadAlshiekh@gmail.com';
        $admin->password='123666';
        $admin->first_name='Ahmad';
        $admin->last_name='alshiekh';
        $admin->phone='+963987649000';
        $admin->idNumber='004672001542';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='mahmoudsbahi';
        $admin->email='mahmoudsbahi@gmail.com';
        $admin->password='123888';
        $admin->first_name='mamoud';
        $admin->last_name='sbahi';
        $admin->phone='+963943567800';
        $admin->idNumber='004322001982';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='JawadTurki';
        $admin->email='JawadTurki@gmail.com';
        $admin->password='123999';
        $admin->first_name='jawad';
        $admin->last_name='turki';
        $admin->phone='+963944560152';
        $admin->idNumber='004500430542';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='mohammedALshaib';
        $admin->email='mohammedALshaib@gmail.com';
        $admin->password='123000';
        $admin->first_name='mohammed';
        $admin->last_name='alshaib';
        $admin->phone='+963936622300';
        $admin->idNumber='004252993002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='SaadMartini';
        $admin->email='SaadMartini@gmail.com';
        $admin->password='12333';
        $admin->first_name='saad';
        $admin->last_name='martini';
        $admin->phone='+963944909012';
        $admin->idNumber='0229748468702';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='AbdinSuliman';
        $admin->email='AbdinSuliman@gmail.com';
        $admin->password='12444';
        $admin->first_name='abdin';
        $admin->last_name='suliman';
        $admin->phone='+963965999944';
        $admin->idNumber='003487687802';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='AnasShann';
        $admin->email='AnasShann@gmail.com';
        $admin->password='12555';
        $admin->first_name='anas';
        $admin->last_name='shann';
        $admin->phone='+963935888111';
        $admin->idNumber='004253732002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='MuhammadBarakat';
        $admin->email='MuhammadBarakat@gmail.com';
        $admin->password='12666';
        $admin->first_name='muhammad';
        $admin->last_name='barakat';
        $admin->phone='+963945763000';
        $admin->idNumber='004987765002';
        $admin->assignRole('admin');
        $admin->save();


        $admin=new User();
        $admin->user_name='FirasWaness';
        $admin->email='FirasWaness@gmail.com';
        $admin->password='12777';
        $admin->first_name='firas';
        $admin->last_name='waness';
        $admin->phone='+963933700700';
        $admin->idNumber='003256865402';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='AmmarFalaha';
        $admin->email='AmmarFalaha@gmail.com';
        $admin->password='12888';
        $admin->first_name='ammar';
        $admin->last_name='falaha';
        $admin->phone='+963933505032';
        $admin->idNumber='00222111965002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='BasselTenbkji';
        $admin->email='BasselTenbkji@gmail.com';
        $admin->password='12999';
        $admin->first_name='bassel';
        $admin->last_name='tenbkji';
        $admin->phone='+963976311100';
        $admin->idNumber='0044444402';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='AmiraMliss';
        $admin->email='AmiraMliss@gmail.com';
        $admin->password='231111';
        $admin->first_name='amira';
        $admin->last_name='mliss';
        $admin->phone='+963993400200';
        $admin->idNumber='00337868802';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='ObidaALmohammed';
        $admin->email='ObidaALmohammed@gmail.com';
        $admin->password='232222';
        $admin->first_name='obida';
        $admin->last_name='almohammed';
        $admin->phone='+963995115110';
        $admin->idNumber='003300000802';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='OmarShehni';
        $admin->email='OmarShehni@gmail.com';
        $admin->password='233333';
        $admin->first_name='omar';
        $admin->last_name='shehni';
        $admin->phone='+963933777111';
        $admin->idNumber='02109876000802';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='RamaAlkhouri';
        $admin->email='RamaAlkhouri@gmail.com';
        $admin->password='234444';
        $admin->first_name='rama';
        $admin->last_name='alkhouri';
        $admin->phone='+963943982000';
        $admin->idNumber='003370000002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='DaliaKatrji';
        $admin->email='DaliaKatrji@gmail.com';
        $admin->password='235555';
        $admin->first_name='dalia';
        $admin->last_name='katrji';
        $admin->phone='+963998812120';
        $admin->idNumber='00559876222002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='MohammedMohammed';
        $admin->email='MohammedMohammed@gmail.com';
        $admin->password='236666';
        $admin->first_name='mohammed';
        $admin->last_name='mohammed';
        $admin->phone='+963996001110';
        $admin->idNumber='001156783330002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='KhalidKattan';
        $admin->email='KhalidKattan@gmail.com';
        $admin->password='237777';
        $admin->first_name='khalid';
        $admin->last_name='kattan';
        $admin->phone='+963965606666';
        $admin->idNumber='003999901002';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='SawasAnass';
        $admin->email='SawasAnass@gmail.com';
        $admin->password='238888';
        $admin->first_name='anass';
        $admin->last_name='sawas';
        $admin->phone='+963933120123';
        $admin->idNumber='0034440102';
        $admin->assignRole('admin');
        $admin->save();

        $admin=new User();
        $admin->user_name='NaelGazal';
        $admin->email='NaelGazal@gmail.com';
        $admin->password='239999';
        $admin->first_name='nael';
        $admin->last_name='gazal';
        $admin->phone='+963933944000';
        $admin->idNumber='003371110002';
        $admin->assignRole('admin');
        $admin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='WaelFaiad';
        $sectionAdmin->email='WaelFaiad@gmail.com';
        $sectionAdmin->password='345111';
        $sectionAdmin->first_name='wael';
        $sectionAdmin->last_name='faiad';
        $sectionAdmin->phone='+963943887600';
        $sectionAdmin->idNumber='0100755330232';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='SamirBakro';
        $sectionAdmin->email='SamirBakro@gmail.com';
        $sectionAdmin->password='342222';
        $sectionAdmin->first_name='sami';
        $sectionAdmin->last_name='bakro';
        $sectionAdmin->phone='+963943380560';
        $sectionAdmin->idNumber='00200003456';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='khaledAboDan';
        $sectionAdmin->email='khaledAboDan@gmail.com';
        $sectionAdmin->password='343333';
        $sectionAdmin->first_name='khaled';
        $sectionAdmin->last_name='abodan';
        $sectionAdmin->phone='+963944532532';
        $sectionAdmin->idNumber='0026663300022';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='MustafaIssa';
        $sectionAdmin->email='MustafaIssa@gmail.com';
        $sectionAdmin->password='344444';
        $sectionAdmin->first_name='mustafa';
        $sectionAdmin->last_name='issa';
        $sectionAdmin->phone='+963947474200';
        $sectionAdmin->idNumber='012777730232';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='AhmadJlilati';
        $sectionAdmin->email='AhmadJlilati@gmail.com';
        $sectionAdmin->password='345555';
        $sectionAdmin->first_name='ahmad';
        $sectionAdmin->last_name='jlilati';
        $sectionAdmin->phone='+963933820820';
        $sectionAdmin->idNumber='004411110932';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='IbrahimAlbiek';
        $sectionAdmin->email='IbrahimAlbiek@gmail.com';
        $sectionAdmin->password='346666';
        $sectionAdmin->first_name='ibrahim';
        $sectionAdmin->last_name='albiek';
        $sectionAdmin->phone='+963955790890';
        $sectionAdmin->idNumber='00266633333372';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammadNaal';
        $sectionAdmin->email='MohammadNaal@gmail.com';
        $sectionAdmin->password='347777';
        $sectionAdmin->first_name='mohammad';
        $sectionAdmin->last_name='naal';
        $sectionAdmin->phone='+963944780990';
        $sectionAdmin->idNumber='0011435555590';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();

        $sectionAdmin=new User();
        $sectionAdmin->user_name='EbrahimAlsaid';
        $sectionAdmin->email='EbrahimAlsaidd@gmail.com';
        $sectionAdmin->password='348888';
        $sectionAdmin->first_name='ebrahim';
        $sectionAdmin->last_name='alsaid';
        $sectionAdmin->phone='+963944209203';
        $sectionAdmin->idNumber='00260054444';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='MahmoudAbdalrahman';
        $sectionAdmin->email='MahmoudAbdalrahman@gmail.com';
        $sectionAdmin->password='349999';
        $sectionAdmin->first_name='mahmoud';
        $sectionAdmin->last_name='abdalrahman';
        $sectionAdmin->phone='+963944577477';
        $sectionAdmin->idNumber='00269990004321';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='OssamaAlkadban';
        $sectionAdmin->email='OssamaAlkadban@gmail.com';
        $sectionAdmin->password='451111';
        $sectionAdmin->first_name='ossama';
        $sectionAdmin->last_name='alkadban';
        $sectionAdmin->phone='+963949984000';
        $sectionAdmin->idNumber='0026800934279721';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammedSHehne';
        $sectionAdmin->email='MohammedSHehne@gmail.com';
        $sectionAdmin->password='452222';
        $sectionAdmin->first_name='mohammed';
        $sectionAdmin->last_name='shehne';
        $sectionAdmin->phone='+963934644622';
        $sectionAdmin->idNumber='002690777331975';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammedOthman';
        $sectionAdmin->email='MohammedOthman@gmail.com';
        $sectionAdmin->password='453333';
        $sectionAdmin->first_name='mohmmed';
        $sectionAdmin->last_name='othman';
        $sectionAdmin->phone='+963947444000';
        $sectionAdmin->idNumber='016884883004321';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='RiadBawadkji';
        $sectionAdmin->email='RiadBawadkji@gmail.com';
        $sectionAdmin->password='454444';
        $sectionAdmin->first_name='riad';
        $sectionAdmin->last_name='bawadkji';
        $sectionAdmin->phone='+9639341200012';
        $sectionAdmin->idNumber='00552908068321';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='SalimEskif';
        $sectionAdmin->email='SalimEskif@gmail.com';
        $sectionAdmin->password='455555';
        $sectionAdmin->first_name='salim';
        $sectionAdmin->last_name='eskif';
        $sectionAdmin->phone='+963955830330';
        $sectionAdmin->idNumber='0065639843544321';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='JamilNasro';
        $sectionAdmin->email='JamilNasro@gmail.com';
        $sectionAdmin->password='456666';
        $sectionAdmin->first_name='jamil';
        $sectionAdmin->last_name='nasro';
        $sectionAdmin->phone='+963967841840';
        $sectionAdmin->idNumber='00062483114321';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='NadaNahas';
        $sectionAdmin->email='NadaNahasn@gmail.com';
        $sectionAdmin->password='457777';
        $sectionAdmin->first_name='nada';
        $sectionAdmin->last_name='nahas';
        $sectionAdmin->phone='+963965653648';
        $sectionAdmin->idNumber='0027656437674321';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='AliShenn';
        $sectionAdmin->email='AliShenn@gmail.com';
        $sectionAdmin->password='458888';
        $sectionAdmin->first_name='ali';
        $sectionAdmin->last_name='shenn';
        $sectionAdmin->phone='+963945616161';
        $sectionAdmin->idNumber='002367598732761';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='IbrahimHussien';
        $sectionAdmin->email='IbrahimHussien@gmail.com';
        $sectionAdmin->password='459999';
        $sectionAdmin->first_name='ibrahim';
        $sectionAdmin->last_name='hussien';
        $sectionAdmin->phone='+963910003000';
        $sectionAdmin->idNumber='00211167604321';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='SalimBawadkji';
        $sectionAdmin->email='SalimBawadkji@gmail.com';
        $sectionAdmin->password='450000';
        $sectionAdmin->first_name='salim';
        $sectionAdmin->last_name='bawadkji';
        $sectionAdmin->phone='+963933777112';
        $sectionAdmin->idNumber='00546767654338721';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='SanaAssi';
        $sectionAdmin->email='SanaAssi@gmail.com';
        $sectionAdmin->password='561111';
        $sectionAdmin->first_name='sana';
        $sectionAdmin->last_name='assi';
        $sectionAdmin->phone='+963945909077';
        $sectionAdmin->idNumber='0166568783665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();




        $sectionAdmin=new User();
        $sectionAdmin->user_name='GeorgeAnttwan';
        $sectionAdmin->email='GeorgeAnttwan@gmail.com';
        $sectionAdmin->password='562222';
        $sectionAdmin->first_name='george';
        $sectionAdmin->last_name='anttwan';
        $sectionAdmin->phone='+963999843212';
        $sectionAdmin->idNumber='0160003599983665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='LubnaWahbe';
        $sectionAdmin->email='LubnaWahbe@gmail.com';
        $sectionAdmin->password='563333';
        $sectionAdmin->first_name='lubna';
        $sectionAdmin->last_name='wahbe';
        $sectionAdmin->phone='+963944032228';
        $sectionAdmin->idNumber='01111754539875';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='RamaDadikhi';
        $sectionAdmin->email='RamaDadikhi@gmail.com';
        $sectionAdmin->password='564444';
        $sectionAdmin->first_name='rama';
        $sectionAdmin->last_name='dadikhi';
        $sectionAdmin->phone='+963944888811';
        $sectionAdmin->idNumber='016099999907465';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='AmmarWahbe';
        $sectionAdmin->email='AmmarWahbe@gmail.com';
        $sectionAdmin->password='565555';
        $sectionAdmin->first_name='ammar';
        $sectionAdmin->last_name='wahbe';
        $sectionAdmin->phone='+963944312312';
        $sectionAdmin->idNumber='00036327657545';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='AbdALhamidTouma';
        $sectionAdmin->email='AbdALhamidTouma@gmail.com';
        $sectionAdmin->password='566666';
        $sectionAdmin->first_name='abdalhamid';
        $sectionAdmin->last_name='touma';
        $sectionAdmin->phone='+963933770771';
        $sectionAdmin->idNumber='01734436784665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='AbbasFalaha';
        $sectionAdmin->email='AbbasFalaha@gmail.com';
        $sectionAdmin->password='567777';
        $sectionAdmin->first_name='abbas';
        $sectionAdmin->last_name='falaha';
        $sectionAdmin->phone='+963945909078';
        $sectionAdmin->idNumber='0166568783665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='BayanAbbas';
        $sectionAdmin->email='BayanAbbass@gmail.com';
        $sectionAdmin->password='568888';
        $sectionAdmin->first_name='bayan';
        $sectionAdmin->last_name='abbas';
        $sectionAdmin->phone='+963948790333';
        $sectionAdmin->idNumber='0136767433665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='EyadArjeh';
        $sectionAdmin->email='EyadArjeh@gmail.com';
        $sectionAdmin->password='569999';
        $sectionAdmin->first_name='eyad';
        $sectionAdmin->last_name='arjeh';
        $sectionAdmin->phone='+963947333399';
        $sectionAdmin->idNumber='01198378003665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='BayanSmmaqeh';
        $sectionAdmin->email='BayanSmmaqeh@gmail.com';
        $sectionAdmin->password='671111';
        $sectionAdmin->first_name='bayan';
        $sectionAdmin->last_name='smmaqeh';
        $sectionAdmin->phone='+963933200102';
        $sectionAdmin->idNumber='01698989000005';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='MarjianaGhreeb';
        $sectionAdmin->email='MarjianaGhreeb@gmail.com';
        $sectionAdmin->password='672222';
        $sectionAdmin->first_name='marjiana';
        $sectionAdmin->last_name='ghareeb';
        $sectionAdmin->phone='+963963244450';
        $sectionAdmin->idNumber='00565543665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='OmarMakanssi';
        $sectionAdmin->email='OmarMakanssi@gmail.com';
        $sectionAdmin->password='673333';
        $sectionAdmin->first_name='omar';
        $sectionAdmin->last_name='makanssi';
        $sectionAdmin->phone='+96393375650';
        $sectionAdmin->idNumber='04378787783665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='ReemKayali';
        $sectionAdmin->email='ReemKayali@gmail.com';
        $sectionAdmin->password='674444';
        $sectionAdmin->first_name='sreem';
        $sectionAdmin->last_name='kayali';
        $sectionAdmin->phone='+963944287777';
        $sectionAdmin->idNumber='01543456733365';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammadKadi';
        $sectionAdmin->email='MohammadKadi@gmail.com';
        $sectionAdmin->password='675555';
        $sectionAdmin->first_name='mohammad';
        $sectionAdmin->last_name='kadi';
        $sectionAdmin->phone='+963977100077';
        $sectionAdmin->idNumber='01343236778896565';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammedKadour';
        $sectionAdmin->email='MohammedKadour@gmail.com';
        $sectionAdmin->password='677777';
        $sectionAdmin->first_name='mohammed';
        $sectionAdmin->last_name='kadour';
        $sectionAdmin->phone='+963996456077';
        $sectionAdmin->idNumber='002038455783665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='RamiHajKhalil';
        $sectionAdmin->email='RamiHajKhalil@gmail.com';
        $sectionAdmin->password='678888';
        $sectionAdmin->first_name='rami';
        $sectionAdmin->last_name='hajkhalil';
        $sectionAdmin->phone='+963988832677';
        $sectionAdmin->idNumber='0022346783665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammedHabbal';
        $sectionAdmin->email='MohammedHabbal@gmail.com';
        $sectionAdmin->password='679999';
        $sectionAdmin->first_name='mohammed';
        $sectionAdmin->last_name='habbal';
        $sectionAdmin->phone='+963982438979';
        $sectionAdmin->idNumber='0187785654665';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='ZahirAbbas';
        $sectionAdmin->email='ZahirAbbas@gmail.com';
        $sectionAdmin->password='670000';
        $sectionAdmin->first_name='zahir';
        $sectionAdmin->last_name='abbas';
        $sectionAdmin->phone='+963934444441';
        $sectionAdmin->idNumber='0166764372263';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='SaliKhouri';
        $sectionAdmin->email='SaliKhouri@gmail.com';
        $sectionAdmin->password='781111';
        $sectionAdmin->first_name='sali';
        $sectionAdmin->last_name='khouri';
        $sectionAdmin->phone='+963943217861';
        $sectionAdmin->idNumber='0074232343763';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='NatalliKhouri';
        $sectionAdmin->email='NatalliKhouri@gmail.com';
        $sectionAdmin->password='782222';
        $sectionAdmin->first_name='natalli';
        $sectionAdmin->last_name='khouri';
        $sectionAdmin->phone='+963936016011';
        $sectionAdmin->idNumber='01111555552263';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='mohammedQatrji';
        $sectionAdmin->email='mohammedQatrji@gmail.com';
        $sectionAdmin->password='783333';
        $sectionAdmin->first_name='mohammed';
        $sectionAdmin->last_name='qatrji';
        $sectionAdmin->phone='+963944321432';
        $sectionAdmin->idNumber='0168664500372263';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='LaithAgoubari';
        $sectionAdmin->email='LaithAgoubari@gmail.com';
        $sectionAdmin->password='784444';
        $sectionAdmin->first_name='laith';
        $sectionAdmin->last_name='algoubari';
        $sectionAdmin->phone='+963900512512';
        $sectionAdmin->idNumber='04321188884373';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='DiaaNajar';
        $sectionAdmin->email='DiaaNajar@gmail.com';
        $sectionAdmin->password='785555';
        $sectionAdmin->first_name='diaa';
        $sectionAdmin->last_name='najar';
        $sectionAdmin->phone='+963934000061';
        $sectionAdmin->idNumber='01111118990263';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='AmiraRamadan';
        $sectionAdmin->email='AmiraRamadan@gmail.com';
        $sectionAdmin->password='786666';
        $sectionAdmin->first_name='amira';
        $sectionAdmin->last_name='ramadan';
        $sectionAdmin->phone='+963933730091';
        $sectionAdmin->idNumber='000976543063';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();




        $sectionAdmin=new User();
        $sectionAdmin->user_name='RamiSawas';
        $sectionAdmin->email='RamiSawas@gmail.com';
        $sectionAdmin->password='787777';
        $sectionAdmin->first_name='rami';
        $sectionAdmin->last_name='sawas';
        $sectionAdmin->phone='+963944993232';
        $sectionAdmin->idNumber='007723456063';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammedKalaji';
        $sectionAdmin->email='MohammedKalaji@gmail.com';
        $sectionAdmin->password='788888';
        $sectionAdmin->first_name='mohammed';
        $sectionAdmin->last_name='kalaji';
        $sectionAdmin->phone='+963943730091';
        $sectionAdmin->idNumber='087632113673';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='JamilJawad';
        $sectionAdmin->email='JamilJawad@gmail.com';
        $sectionAdmin->password='789999';
        $sectionAdmin->first_name='jamil';
        $sectionAdmin->last_name='jawad';
        $sectionAdmin->phone='+963933771230';
        $sectionAdmin->idNumber='011114222063';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();



        $sectionAdmin=new User();
        $sectionAdmin->user_name='MohammadIsmail';
        $sectionAdmin->email='MohammadIsmail@gmail.com';
        $sectionAdmin->password='780000';
        $sectionAdmin->first_name='mohammed';
        $sectionAdmin->last_name='ismail';
        $sectionAdmin->phone='+963999367434';
        $sectionAdmin->idNumber='009888355645463';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


        $sectionAdmin=new User();
        $sectionAdmin->user_name='MulhemSbahi';
        $sectionAdmin->email='MulhemSbahi@gmail.com';
        $sectionAdmin->password='891111';
        $sectionAdmin->first_name='mulhem';
        $sectionAdmin->last_name='sbahi';
        $sectionAdmin->phone='+963999021021';
        $sectionAdmin->idNumber='00223131235663';
        $sectionAdmin->assignRole('section_admin');
        $sectionAdmin->save();


    }
}

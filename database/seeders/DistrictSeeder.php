<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = array(
            array('name' => 'Comilla','local_name' => 'কুমিল্লা','lat' => '23.4682747','lon' => '91.1788135','url' => 'www.comilla.gov.bd'),
            array('name' => 'Feni','local_name' => 'ফেনী','lat' => '23.023231','lon' => '91.3840844','url' => 'www.feni.gov.bd'),
            array('name' => 'Brahmanbaria','local_name' => 'ব্রাহ্মণবাড়িয়া','lat' => '23.9570904','lon' => '91.1119286','url' => 'www.brahmanbaria.gov.bd'),
            array('name' => 'Rangamati','local_name' => 'রাঙ্গামাটি','lat' => '22.65561018','lon' => '92.17541121','url' => 'www.rangamati.gov.bd'),
            array('name' => 'Noakhali','local_name' => 'নোয়াখালী','lat' => '22.869563','lon' => '91.099398','url' => 'www.noakhali.gov.bd'),
            array('name' => 'Chandpur','local_name' => 'চাঁদপুর','lat' => '23.2332585','lon' => '90.6712912','url' => 'www.chandpur.gov.bd'),
            array('name' => 'Lakhshmipur','local_name' => 'লক্ষ্মীপুর','lat' => '22.942477','lon' => '90.841184','url' => 'www.lakshmipur.gov.bd'),
            array('name' => 'Chittagong','local_name' => 'চট্টগ্রাম','lat' => '22.335109','lon' => '91.834073','url' => 'www.chittagong.gov.bd'),
            array('name' => "Cox's Bazar",'local_name' => 'কক্সবাজার','lat' => '21.44315751','lon' => '91.97381741','url' => 'www.coxsbazar.gov.bd'),
            array('name' => 'Khagrachhari','local_name' => 'খাগড়াছড়ি','lat' => '23.119285','lon' => '91.984663','url' => 'www.khagrachhari.gov.bd'),
            array('name' => 'Bandarban','local_name' => 'বান্দরবান','lat' => '22.1953275','lon' => '92.2183773','url' => 'www.bandarban.gov.bd'),
            array('name' => 'Sirajganj','local_name' => 'সিরাজগঞ্জ','lat' => '24.4533978','lon' => '89.7006815','url' => 'www.sirajganj.gov.bd'),
            array('name' => 'Pabna','local_name' => 'পাবনা','lat' => '23.998524','lon' => '89.233645','url' => 'www.pabna.gov.bd'),
            array('name' => 'Bogra','local_name' => 'বগুড়া','lat' => '24.8465228','lon' => '89.377755','url' => 'www.bogra.gov.bd'),
            array('name' => 'Rajshahi','local_name' => 'রাজশাহী','lat' => '24.37230298','lon' => '88.56307623','url' => 'www.rajshahi.gov.bd'),
            array('name' => 'Nator','local_name' => 'নাটোর','lat' => '24.420556','lon' => '89.000282','url' => 'www.natore.gov.bd'),
            array('name' => 'Joypurhat','local_name' => 'জয়পুরহাট','lat' => '25.09636876','lon' => '89.04004280','url' => 'www.joypurhat.gov.bd'),
            array('name' => 'Chapainababganj','local_name' => 'চাঁপাইনবাবগঞ্জ','lat' => '24.5965034','lon' => '88.2775122','url' => 'www.chapainawabganj.gov.bd'),
            array('name' => 'Naogaon','local_name' => 'নওগাঁ','lat' => '24.83256191','lon' => '88.92485205','url' => 'www.naogaon.gov.bd'),
            array('name' => 'Jessore','local_name' => 'যশোর','lat' => '23.16643','lon' => '89.2081126','url' => 'www.jessore.gov.bd'),
            array('name' => 'Satkhira','local_name' => 'সাতক্ষীরা','lat' => NULL,'lon' => NULL,'url' => 'www.satkhira.gov.bd'),
            array('name' => 'Meherpur','local_name' => 'মেহেরপুর','lat' => '23.762213','lon' => '88.631821','url' => 'www.meherpur.gov.bd'),
            array('name' => 'Naraiil','local_name' => 'নড়াইল','lat' => '23.172534','lon' => '89.512672','url' => 'www.narail.gov.bd'),
            array('name' => 'Chuadanga','local_name' => 'চুয়াডাঙ্গা','lat' => '23.6401961','lon' => '88.841841','url' => 'www.chuadanga.gov.bd'),
            array('name' => 'Kustia','local_name' => 'কুষ্টিয়া','lat' => '23.901258','lon' => '89.120482','url' => 'www.kushtia.gov.bd'),
            array('name' => 'Magura','local_name' => 'মাগুরা','lat' => '23.487337','lon' => '89.419956','url' => 'www.magura.gov.bd'),
            array('name' => 'Khulna','local_name' => 'খুলনা','lat' => '22.815774','lon' => '89.568679','url' => 'www.khulna.gov.bd'),
            array('name' => 'Bagherhat','local_name' => 'বাগেরহাট','lat' => '22.651568','lon' => '89.785938','url' => 'www.bagerhat.gov.bd'),
            array('name' => 'Jhenaidah','local_name' => 'ঝিনাইদহ','lat' => '23.5448176','lon' => '89.1539213','url' => 'www.jhenaidah.gov.bd'),
            array('name' => 'Chittagong City','local_name' => 'চট্টগ্রাম জেলা','lat' => NULL,'lon' => NULL,'url' => 'www.jhalakathi.gov.bd'),
            array('name' => 'Patuakhali','local_name' => 'পটুয়াখালী','lat' => '22.3596316','lon' => '90.3298712','url' => 'www.patuakhali.gov.bd'),
            array('name' => 'Pirojpur','local_name' => 'পিরোজপুর','lat' => NULL,'lon' => NULL,'url' => 'www.pirojpur.gov.bd'),
            array('name' => 'Barisal','local_name' => 'বরিশাল','lat' => NULL,'lon' => NULL,'url' => 'www.barisal.gov.bd'),
            array('name' => 'Bhola','local_name' => 'ভোলা','lat' => '22.685923','lon' => '90.648179','url' => 'www.bhola.gov.bd'),
            array('name' => 'Barguna','local_name' => 'বরগুনা','lat' => NULL,'lon' => NULL,'url' => 'www.barguna.gov.bd'),
            array('name' => 'Sylhet','local_name' => 'সিলেট','lat' => '24.8897956','lon' => '91.8697894','url' => 'www.sylhet.gov.bd'),
            array('name' => 'Moulvibazar','local_name' => 'মৌলভীবাজার','lat' => '24.482934','lon' => '91.777417','url' => 'www.moulvibazar.gov.bd'),
            array('name' => 'Habiganj','local_name' => 'হবিগঞ্জ','lat' => '24.374945','lon' => '91.41553','url' => 'www.habiganj.gov.bd'),
            array('name' => 'Sunamganj','local_name' => 'সুনামগঞ্জ','lat' => '25.0658042','lon' => '91.3950115','url' => 'www.sunamganj.gov.bd'),
            array('name' => 'Narsingdi','local_name' => 'নরসিংদী','lat' => '23.932233','lon' => '90.71541','url' => 'www.narsingdi.gov.bd'),
            array('name' => 'Gazipur','local_name' => 'গাজীপুর','lat' => '24.0022858','lon' => '90.4264283','url' => 'www.gazipur.gov.bd'),
            array('name' => 'Shariatpur','local_name' => 'শরীয়তপুর','lat' => NULL,'lon' => NULL,'url' => 'www.shariatpur.gov.bd'),
            array('name' => 'Narayanganj','local_name' => 'নারায়ণগঞ্জ','lat' => '23.63366','lon' => '90.496482','url' => 'www.narayanganj.gov.bd'),
            array('name' => 'Tangail','local_name' => 'টাঙ্গাইল','lat' => '24.26361358','lon' => '89.91794786','url' => 'www.tangail.gov.bd'),
            array('name' => 'Kishoreganj','local_name' => 'কিশোরগঞ্জ','lat' => '24.444937','lon' => '90.776575','url' => 'www.kishoreganj.gov.bd'),
            array('name' => 'Manikganj','local_name' => 'মানিকগঞ্জ','lat' => NULL,'lon' => NULL,'url' => 'www.manikganj.gov.bd'),
            array('name' => 'Dhaka (Sub-Area)','local_name' => 'ঢাকা','lat' => '23.7115253','lon' => '90.4111451','url' => 'www.dhaka.gov.bd'),
            array('name' => 'Munshiganj','local_name' => 'মুন্সিগঞ্জ','lat' => NULL,'lon' => NULL,'url' => 'www.munshiganj.gov.bd'),
            array('name' => 'Rajbari','local_name' => 'রাজবাড়ী','lat' => '23.7574305','lon' => '89.6444665','url' => 'www.rajbari.gov.bd'),
            array('name' => 'Madaripur','local_name' => 'মাদারীপুর','lat' => '23.164102','lon' => '90.1896805','url' => 'www.madaripur.gov.bd'),
            array('name' => 'Gopalganj','local_name' => 'গোপালগঞ্জ','lat' => '23.0050857','lon' => '89.8266059','url' => 'www.gopalganj.gov.bd'),
            array('name' => 'Faridpur','local_name' => 'ফরিদপুর','lat' => '23.6070822','lon' => '89.8429406','url' => 'www.faridpur.gov.bd'),
            array('name' => 'Panchagarh','local_name' => 'পঞ্চগড়','lat' => '26.3411','lon' => '88.5541606','url' => 'www.panchagarh.gov.bd'),
            array('name' => 'Dinajpur','local_name' => 'দিনাজপুর','lat' => '25.6217061','lon' => '88.6354504','url' => 'www.dinajpur.gov.bd'),
            array('name' => 'Lalmonirhat','local_name' => 'লালমনিরহাট','lat' => NULL,'lon' => NULL,'url' => 'www.lalmonirhat.gov.bd'),
            array('name' => 'Nilphamari','local_name' => 'নীলফামারী','lat' => '25.931794','lon' => '88.856006','url' => 'www.nilphamari.gov.bd'),
            array('name' => 'Gaibandha','local_name' => 'গাইবান্ধা','lat' => '25.328751','lon' => '89.528088','url' => 'www.gaibandha.gov.bd'),
            array('name' => 'Thakurgaon','local_name' => 'ঠাকুরগাঁও','lat' => '26.0336945','lon' => '88.4616834','url' => 'www.thakurgaon.gov.bd'),
            array('name' => 'Rangpur','local_name' => 'রংপুর','lat' => '25.7558096','lon' => '89.244462','url' => 'www.rangpur.gov.bd'),
            array('name' => 'Kurigram','local_name' => 'কুড়িগ্রাম','lat' => '25.805445','lon' => '89.636174','url' => 'www.kurigram.gov.bd'),
            array('name' => 'Sherpur','local_name' => 'শেরপুর','lat' => '25.0204933','lon' => '90.0152966','url' => 'www.sherpur.gov.bd'),
            array('name' => 'Mymenshing','local_name' => 'ময়মনসিংহ','lat' => '24.7465670','lon' => '90.4072093','url' => 'www.mymensingh.gov.bd'),
            array('name' => 'Jamalpur','local_name' => 'জামালপুর','lat' => '24.937533','lon' => '89.937775','url' => 'www.jamalpur.gov.bd'),
            array('name' => 'Netrakona','local_name' => 'নেত্রকোণা','lat' => '24.870955','lon' => '90.727887','url' => 'www.netrokona.gov.bd'),
            array('name' => 'Dhaka','local_name' => 'ঢাকা','lat' => '23.7115253','lon' => '90.4111451','url' => 'www.dhaka.gov.bd'),
        );

        foreach ($districts as $district) {
            District::create([
                'name' => $district['name']
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\ContactInfo;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ContactInfo = new ContactInfo();
        $ContactInfo->mobile = '00966556821445';
        $ContactInfo->email = 'info@digitsmark.com';
        $ContactInfo->whatsapp = '+966556821445';
        $ContactInfo->location_link = 'https://bit.ly/3DMYSbj';
        $ContactInfo->translateOrNew('en')->location = 'Falastin, Bani Malik, Jeddah 22230, Saudi Arabia';
        $ContactInfo->translateOrNew('ar')->location = 'جدة بني مالك - شارع فلسطين - ابراج الليزر التجارية';
        $ContactInfo->save();
    }
}

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
        $ContactInfo->mobile = '00966666666666';
        $ContactInfo->email = 'info@bsecret.com';
        $ContactInfo->whatsapp = '+966666666666';
        $ContactInfo->location_link = 'https://goo.gl/maps/SbF3CEMEvcjWYMhk7';
        $ContactInfo->translateOrNew('en')->location = 'Saudi Arabia';
        $ContactInfo->translateOrNew('ar')->location = 'المملكة العربية السعودية';
        $ContactInfo->save();
    }
}

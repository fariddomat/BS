<?php

use Illuminate\Database\Seeder;
use App\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialMedia::insert([
            [
                'name' => 'Instagram',
                'icon' => 'fa-instagram',
                'link' => 'https://www.instagram.com/BSecrets/',
            ],
            [
                'name' => 'Twitter',
                'icon' => 'fa-twitter',
                'link' => 'https://twitter.com/BSecrets',
            ],
            [
                'name' => 'Linkedin',
                'icon' => 'fa-linkedin',
                'link' => 'https://www.linkedin.com/company/BSecrets-est',
            ],
            [
                'name' => 'Snapchat',
                'icon' => 'fa-snapchat',
                'link' => '#',
            ],
            [
                'name' => 'Youtube',
                'icon' => 'fa-youtube',
                'link' => 'https://www.youtube.com/channel/BSecrets',
            ],
            [
                'name' => 'Facebook',
                'icon' => 'fa-facebook-f',
                'link' => 'https://www.facebook.com/BSecrets',
            ],
            [
                'name' => 'Tiktok',
                'icon' => 'fa-tiktok',
                'link' => 'https://www.tiktok.com/@BSecrets',
            ],
        ]);
    }
}

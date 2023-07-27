<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'super_admin',
            'email' => 'super_admin@bsecret.com',
            'password' => bcrypt('00@11@22$33'),
        ]);
        $user->attachRole('superadministrator');

        $blogger = User::create([
            'name' => 'blogger',
            'email' => 'blogger@bsecret.com',
            'password' => bcrypt('00@11@22$33'),
        ]);
        $blogger->attachRole('blogger');
    }
}

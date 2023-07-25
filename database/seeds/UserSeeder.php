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
            'email' => 'super_admin@digitsmark.com',
            'password' => bcrypt('123456789'),
        ]);
        $user->attachRole('superadministrator');

        $blogger = User::create([
            'name' => 'blogger',
            'email' => 'blogger@digitsmark.com',
            'password' => bcrypt('blog987654321'),
        ]);
        $blogger->attachRole('blogger');
    }
}

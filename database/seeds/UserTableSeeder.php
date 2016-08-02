<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Syed Zain UL Hasan',
            'username' =>'hassan9224',
            'password' => bcrypt('Madleets')
        ]);


        User::create([
            'name' => 'Admin',
            'username' =>'admin',
            'password' => bcrypt('123456')
        ]);
    }
}

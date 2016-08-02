<?php

use Illuminate\Database\Seeder;
use App\Session;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

           Session::create([

               'startingDate' => '27-07-2016',
               'endingDate' => '27-07-2017'
           ]);


    }
}

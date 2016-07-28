<?php

use Illuminate\Database\Seeder;
use App\Seassion;

class SeassionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i=0;$i<10;$i++)
       {
           Seassion::create([

               'startingDate' => '27/07/2016',
               'endingDate' => '27/07/2017'
           ]);

       }
    }
}

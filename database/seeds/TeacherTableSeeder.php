<?php

use Illuminate\Database\Seeder;

use App\Teacher;
class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Teacher::create([

          'name' =>'Syed Zain UL Hasan',
          'cnic' =>'1234567896',
          'phone' =>'555555',
          'designation'=>'Teacher'
      ]);


        Teacher::create([

            'name' =>'Syed Aizad Raza',
            'cnic' =>'1234567896',
            'phone' =>'555555',
            'designation'=>'Teacher'
        ]);

    }
}

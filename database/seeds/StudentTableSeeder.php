<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Factory as Faker;


class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,100) as $index){

            $student=new Student();
            $student->firstName=$faker->firstName;
            $student->lastName=$faker->lastName;
            $student->fatherName=$faker->Name;


            $student->contact1=$faker->phoneNumber;
            $student->contact1=$faker->phoneNumber;



            $student->save();

        }


    }
}

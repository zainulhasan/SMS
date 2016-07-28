<?php

use Illuminate\Database\Seeder;
use App\Classes;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Classes::create([
            'name'=>'1',
            'section'=>'A',
            'capacity'=>36,
            'teacher_id'=>1,
            'session_id'=>1
        ]);

    }
}


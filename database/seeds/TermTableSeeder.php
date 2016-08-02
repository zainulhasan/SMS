<?php

use Illuminate\Database\Seeder;

use App\Term;
class TermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::create([

            'startingDate' => '27-07-2016',
            'endingDate' => '27-10-2016',
            'chapter' => '2',
            'page' => '10',
            'subject_id' => '1',
            'termStatus' => '0',
            'status' => '0',
        ]);
    }
}

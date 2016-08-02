<?php

use Illuminate\Database\Seeder;
use App\Book;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'name' => 'Introduction to Computer',
            'description' => 'A simple book for it forks.'
        ]);
    }
}

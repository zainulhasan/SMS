<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

//       $this->call(SessionsTableSeeder::class);
//        $this->call(TeacherTableSeeder::class);
//        $this->call(ClassesTableSeeder::class);
//        $this->call(BookTableSeeder::class);
//        $this->call(UserTableSeeder::class);
//        $this->call(TermTableSeeder::class);

        $this->call(StudentTableSeeder::class);

    }
}

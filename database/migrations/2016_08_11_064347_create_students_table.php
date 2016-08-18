<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('dob');
            $table->string('loc');//location of Birth

            $table->string('fatherName');
            $table->string('motherName');

            $table->string('language');
            $table->string('nationality');
            $table->string('religion');
            $table->string('cnic');
            $table->string('cnicImage');
            $table->string('passport');
            $table->string('passportImage');

            $table->string('contact1');
            $table->string('contact2');
            $table->string('landline');



            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');

            $table->integer('session_id')->unsigned();
            $table->integer('classes_id')->unsigned();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('gender');
            $table->string('dob');

            $table->string('language');
            $table->string('nationality');
            $table->string('religion');

            $table->string('cnic');
            $table->string('cnicImage');

            $table->string('passport');
            $table->string('passportImage');

            $table->string('contact1');
            $table->string('contact2');


            $table->string('email');
            $table->string('address');


            $table->string('occupation');
            $table->string('income');

            $table->integer('student_id')->unsigned();
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
        Schema::drop('student_guardians');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubjectKeyToTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('terms', function (Blueprint $table) {

            $table->foreign('subject_id')
                ->references('id')->on('subjects')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
  {
        Schema::table('terms', function (Blueprint $table) {

          // $table->dropForeign('terms_subject_id_foreign');


        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTermKeyToChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapters', function (Blueprint $table) {

            $table->foreign('term_id')
                ->references('id')->on('terms')
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
        Schema::table('chapters', function (Blueprint $table) {

            $table->dropForeign('chapters_term_id_foreign');


        });
    }
}

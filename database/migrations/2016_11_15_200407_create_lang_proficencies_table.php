<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangProficenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('language_proficiency', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('language_id');
            $table->enum('proficiency', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

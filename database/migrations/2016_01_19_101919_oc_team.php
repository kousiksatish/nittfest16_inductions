<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OcTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('oc_team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dept');
            $table->string('rollno');
            $table->string('phoneno');
            $table->string('ques1',2000);
            $table->string('ques2',2000);
            $table->string('ques3',2000);
            $table->string('ques4',2000);
            $table->string('ques5',2000);
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
        //
        Schema::drop('oc_team');
    }
}

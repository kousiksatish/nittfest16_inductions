<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Preference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('oc_team', function ($table) {
            $table->string('preference');
        });
        Schema::table('pr_team', function ($table) {
            $table->string('preference');
        });
        Schema::table('ambience_team', function ($table) {
            $table->string('preference');
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
        Schema::table('oc_team', function ($table) {
            $table->dropColumn('preference');
        });

        Schema::table('pr_team', function ($table) {
            $table->dropColumn('preference');
        });
        Schema::table('ambience_team', function ($table) {
            $table->dropColumn('preference');
        });
    }
}

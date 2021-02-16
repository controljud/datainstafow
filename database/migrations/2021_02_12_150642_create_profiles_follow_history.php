<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesFollowHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles_follow_history', function (Blueprint $table) {
            $table->id();
            $table->integer('idProfile');
            $table->timestamp('date');
            $table->integer('followers');
            $table->timestamps();

            $table->foreign('idProfile')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles_follow_history');
    }
}

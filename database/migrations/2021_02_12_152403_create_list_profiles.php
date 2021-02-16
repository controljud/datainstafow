<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('idUser');
            $table->integer('idProfile');
            $table->timestamps();
            
            $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('list_profiles');
    }
}

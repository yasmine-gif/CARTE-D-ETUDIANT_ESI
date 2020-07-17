<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonneAPrevenir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne_a_prevenirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->timestamp('prenom');
            $table->string('contact')->unique();
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
        Schema::dropIfExists('personne_a_prevenirs');
    }
}

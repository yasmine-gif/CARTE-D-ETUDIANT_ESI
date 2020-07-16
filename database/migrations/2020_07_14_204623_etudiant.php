<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Etudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->unsignedBigInteger('personne_a_prevenir_id');
            $table->unsignedBigInteger('filiere_id');
            $table->string('matricule')->unique();
            $table->string('nom');
            $table->timestamp('prenom');
            $table->string('cycle');
            $table->string('nationalite');            
            $table->text('photo');
            $table->string('annee_academic');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
        Schema::enableForeignKeyConstraints();
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChikayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chikayas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('telephone');
            $table->string('email');
            $table->string('addresse');

            $table->string('region');
            $table->string('province');
            $table->string('nom_departement');

            $table->string('reclamation');
            $table->string('texte_reclamation');

            $table->string('check');
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
        Schema::dropIfExists('chikayas');
    }
}

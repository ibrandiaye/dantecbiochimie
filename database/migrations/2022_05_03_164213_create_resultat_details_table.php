<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_details', function (Blueprint $table) {
            $table->id();
            $table->double('valeur');
            $table->unsignedBigInteger('parametre_id');
            $table->unsignedBigInteger('resultat_id');
            $table->foreign('parametre_id')
            ->references('id')
            ->on('parametres');
            $table->foreign('resultat_id')
            ->references('id')
            ->on('resultats');
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
        Schema::dropIfExists('resultat_details');
    }
}

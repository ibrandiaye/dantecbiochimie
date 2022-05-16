<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableResultatDetailsAddColum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultat_details', function (Blueprint $table) {
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')
            ->references('id')
            ->on('machines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultat_details', function (Blueprint $table) {
            //
        });
    }
}

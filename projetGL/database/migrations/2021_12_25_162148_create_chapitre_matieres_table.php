<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapitreMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapitre_matieres', function (Blueprint $table) {
            $table->unsignedInteger('chapitre_id');
            $table->unsignedInteger('matiere_id');
            $table->timestamps();
            $table->foreign('chapitre_id')->references('id')->on('chapitres')->onDelete('cascade');
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapitre_matieres');
    }
}

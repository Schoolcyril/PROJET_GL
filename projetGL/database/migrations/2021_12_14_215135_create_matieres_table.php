<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom')->nullable();
            $table->string('code_matiere')->nullable();
            $table->integer('nbre_heures')->nullable();
            $table->integer('enseignant_id')->unsigned();
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matieres');
    }
}

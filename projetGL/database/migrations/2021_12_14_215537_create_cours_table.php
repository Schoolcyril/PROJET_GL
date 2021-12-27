<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enseignant_id')->unsigned();
            $table->integer('chapitre_id')->unsigned();
            $table->integer('apprenant_id')->unsigned();
            $table->timestamps();
            $table->date('date');
            $table->time('Heure_deb')->nullable();
            $table->time('Heure_fin')->nullable();
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('chapitre_id')->references('id')->on('chapitres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade')->onUpdate('cascade');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cours');
    }
}

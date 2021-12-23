<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomes', function (Blueprint $table) {
            $table->increments('id');
            $table->date("année_obtention");
            $table->integer("apprenant_id")->unsigned();
            $table->enum("mention",['passable','bien','tres bien','excellent'])->default('passable');
            $table->timestamps();
            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diplomes');
    }
}

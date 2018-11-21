<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Shema:create('bd',function(Blueprint $table))
        $table->increments('id_bd');
        $table->string('titre_bd');
        $table->string('sousTitre_bd');
        $table->integer('tome_bd');
        $table->date('dateParution_bd');
        $table->string('auteur_bd');
        $table->string('resume_bd');
        $table->unsignedInteger('fk_image');

        $table->foreign('fk_image')
              ->references('id_image')->on('image')
              ->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::drop('bd');
    }
}

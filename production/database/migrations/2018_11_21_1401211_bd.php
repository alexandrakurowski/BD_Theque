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
        Schema::create('bd',function(Blueprint $table){

        $table->increments('id_bd');
        $table->string('titre_bd');
        $table->string('sousTitre_bd');
        $table->integer('tome_bd');
        $table->date('dateParution_bd');
        $table->string('auteur_bd');
        $table->string('resume_bd');
        $table->string('loc_image');
       

                 });
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

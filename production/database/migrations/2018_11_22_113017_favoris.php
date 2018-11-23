<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Favoris extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Favoris',function(Blueprint $table){
            $table->increments('id_favoris');
            $table->unsignedInteger('id_users');
            $table->unsignedInteger('id_bd');

            $table->foreign('id_users')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('favoris');
    }
}

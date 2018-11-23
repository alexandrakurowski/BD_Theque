<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Envies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envies',function(Blueprint $table){

        
            $table->increments('id_envie');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_bd');

            $table->foreign('id_user')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->foreign('id_bd')
                    ->references('id_bd')->on('bd')
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
        Shema::drop('envies');
    }
}

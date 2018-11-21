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
        Shema:create('envies',function(Blueprint $table))
        
            $table->increments('id_envie');
            $table->unsignedInteger('fk_users');
            $table->unsignedInteger('fk_bd');

            $table->foreign('fk_users')
                    ->references('id_user')->on('users')
                    ->onDelete('cascade');
            $table->foreign('fk_bd')
                    ->references('id_bd')->on('bd')
                    ->onDelete('cascade');
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

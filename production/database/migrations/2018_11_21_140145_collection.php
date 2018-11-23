<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Collection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('collection',function(Blueprint $table){

            $table->increments('id_collection');
            $table->string('nom_collection');
            $table->unsignedInteger('id_users');
            $table->unsignedInteger('id_bd');

            $table->foreign('id_users')
                    ->references('id')->on(
                        'users')
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
        shema::drop('collection');
    }
}

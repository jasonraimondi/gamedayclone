<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('home_team')->unsigned()->index();
            $table->foreign('home_team')->references('id')->on('schools')->onDelete('cascade');
            $table->integer('away_team')->unsigned()->index();
            $table->foreign('away_team')->references('id')->on('schools')->onDelete('cascade');
            $table->date('game_datetime');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('games');
    }
}

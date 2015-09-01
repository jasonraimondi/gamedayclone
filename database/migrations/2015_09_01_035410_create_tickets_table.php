<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned()->index();
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->integer('school_id')->unsigned()->index();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->integer('seller_id')->unsigned()->index();
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('buyer_id')->unsigned()->index()->nullable();
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('description')->nullable();
            $table->integer('price')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->string('seat', 25)->nullable();
            $table->string('row', 25)->nullable();
            $table->string('section', 25)->nullable();
            $table->boolean('featured')->default(false);
            $table->string('confirmation_code')->nullable();
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
        Schema::drop('tickets');
    }
}

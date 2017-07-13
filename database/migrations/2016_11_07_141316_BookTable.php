<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookTable extends Migration
{

    public function up()
    {
        Schema::create('books', function (Blueprint $table){
            $table->increments('id')->unique();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('title');
            $table->string('author');
            $table->string('photo_small')->nullable();
            $table->string('photo_large')->nullable();
            $table->timestamps();
        });

        Schema::table('books', function (Blueprint $table){
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('books');
    }
}

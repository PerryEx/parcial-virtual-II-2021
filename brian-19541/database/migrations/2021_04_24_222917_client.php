<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table){
            $table->id();
            $table->String('name_client');
            $table->date('birthday_date');
            $table->integer('age_client');
            $table->String('email_client');
            $table->integer('number_telefon');
            $table->unsignedBigInteger('category_client');
            $table->unsignedBigInteger('gender_client');
            $table->unsignedBigInteger('departament_client');
            $table->foreign('category_client')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('gender_client')->references('id')->on('gender')->onDelete('cascade');
            $table->foreign('departament_client')->references('id')->on('departament')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}

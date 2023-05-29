<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imie')->required();
            $table->string('nazwisko')->required();
            $table->string('kraj')->required();
            $table->string('miasto')->required();
            $table->string('ulica')->required();
            $table->integer('nr_budynku')->required();
            $table->integer('nr_mieszkania');
            $table->integer('kod_pocztowy')->required();
            $table->integer('nr_telefonu')->required();
            $table->string('email')->required();
            $table->string('platnosc');
            $table->integer('wartosc');
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
        Schema::dropIfExists('orders');
    }
};

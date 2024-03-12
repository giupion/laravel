<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibriTable extends Migration
{
    public function up()
    {
        Schema::create('libri', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->unsignedBigInteger('autore_id');
            $table->unsignedBigInteger('categoria_id');
            // Aggiungi altri campi necessari qui

            $table->foreign('autore_id')->references('id')->on('autori')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorie')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('libri');
    }
}
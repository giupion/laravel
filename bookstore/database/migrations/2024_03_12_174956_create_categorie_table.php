<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorieTable extends Migration
{
    public function up()
    {
        Schema::create('categorie', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            // Aggiungi altri campi necessari qui
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorie');
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoriTable extends Migration
{
    public function up()
    {
        Schema::create('autori', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cognome')->nullable();
            // Aggiungi altri campi necessari qui
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autori');
    }
}

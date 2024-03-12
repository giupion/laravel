<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libri';
    protected $fillable = ['titolo', 'autore_id', 'categoria_id', /* altri campi */];

    public function autore()
    {
        return $this->belongsTo(Autore::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
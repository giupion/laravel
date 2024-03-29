<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorie';
    protected $fillable = ['nome'];

    public function libri()
    {
        return $this->hasMany(Libro::class);
    }
}
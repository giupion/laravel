<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    protected $table = 'autori';
    protected $fillable = ['nome', 'cognome'];

    public function libri()
    {
        return $this->hasMany(Libro::class);
    }
}
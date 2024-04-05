<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    // funzione per recuperare un tipo
    public function type()
    {
        return $this->belongsTo(type::class);
    }

    // come prendere i primi 15 caratteri del content
    public function getAbstract($n_chars = 30)
    {
        // se la lunghezza richiesta è maggiore della lunghezza totale non stampa i tre puntini alla fine
        return strlen($this->content) > $n_chars ? substr($this->content, 0, $n_chars) . '...' : $this->content;
    }
}

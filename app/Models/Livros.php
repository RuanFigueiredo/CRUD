<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;
    protected $fillable = ['nome','categoria', 'codigo', 'autor', 
    'Ebook', 'tamanho do arquivo',  'pessoa_id', 'id', 'pessoas', 'peso'];
}

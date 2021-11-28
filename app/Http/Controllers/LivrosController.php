<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use resources\views\livros\create;

class LivrosController extends Controller
{
    public function create(){
        return view ('livros.create');
    }
    public function store(Request $request){
        Livros::create([
            'nome' =>$request->nome,
            'categoria'=>$request->categoria,
            'codigo'=>$request->codigo,
            'autor'=>$request->autor,
            'Ebook'=>$request->Ebook,
            'tamanho_do_arquivo'=>$request->tamanho_do_arquivo,
            'peso'=>$request->peso,
        ]);
        return "Livro salvo com sucesso";   
    }
}

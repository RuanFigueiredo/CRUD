<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = Livro::all();
        return view('livros.index', ['livros' => $entradas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $body = $request->all();
        if(array_key_exists('ebook', $body)){
            $body['ebook']=true;
        }else{
            $body['ebook']=false;
        }

        Livro::create($body);
        return redirect()->route('livros.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro=Livro::findOrFail($id);
        return view('livros.show', ['livro'=>$livro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro=Livro::findOrFail($id);
        return view('livros.edit', ['livro'=>$livro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $body = $request->all();
        if(array_key_exists('ebook', $body)){
            $body['ebook']=true;
        }else{
            $body['ebook']=false;
        }

        $livro=Livro::find($id);
        $livro->fill($body);
        $livro->save();
        return redirect()->route('livros.show', $livro->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro=Livro::find($id);
        $livro->delete();
        return redirect()->route('livros.index', $livro->id);
    }
}

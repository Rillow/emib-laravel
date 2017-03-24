<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmeController extends Controller
{
    public function index()
    {
        $filmes = Filme::all();
        
        return view('filmes.index', compact('filmes'));
    }

    public function create()
    {
        return view('filmes.create');
    }

    public function save(Request $request)
    {
        $filme = new Filme();
        $filme->titulo = $request->titulo;
        $filme->descricao = $request->descricao;

        $filme->save();

        return redirect('/filmes');

    }
}

<?php
//iniciando classe Series Controller

namespace App\Http\Controllers;

//o controlador do laravavel herda da classe Controllers

use Illuminate\Http\Request;
use App\Serie;
//Adicionado função, retirada da web.php
class SeriesController extends Controller
{
    
    public function index(Request $request) {
        //Vai buscar tudo que tem no meu banco de series
        $series = Serie::query()
        ->orderBy('nome')
        ->get();
        
        $mensagem = $request->session()->get('mensagem');
    
        return view('series.index',compact('series'));
    }

    //criando a função da nova rota de cadastro

    
    public function create(){
        return view('series.create');
    }

    public function store(Request $request)
    {
        
        $serie =  Serie::create($request->all());
        $request->session()
        ->put(
            'mensagem',
            "Série {$serie->id} criada com sucesso{$serie->nome}"
        );

        return redirect ('/series');
        
    }
}
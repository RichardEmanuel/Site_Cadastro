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
        //-> Vamos exibir 
        //echo $request->query('parametro');
        //var_dump($request->query()); // retorna um arrey 
        //exit();


        // arrey de series, inciriando as series
        $series = [
          'Supernatural',
          'Ordem na casa - MARIE KONDO',
          'Black Mirror - test'
        ];
        // Montando um html para printar as series
    
        /*
        -> Vamos retornar uma View, assim tirarndo o html de jogo
        */

    
        return view('series.index',compact('series'));
    }

    //criando a função da nova rota de cadastro

    
    public function create(){
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());

    }
}
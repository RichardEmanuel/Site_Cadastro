<?php
//iniciando classe Series Controller

namespace App\Http\Controllers;
//o controlador do laravavel herda da classe Controllers

//Adicionado função, retirada da web.php
class SeriesController extends Controller
{
    function listarSeries(){
        // arrey de series, inciriando as series
        $series = [
          'Supernatural',
          'Ordem na casa - MARIE KONDO',
          'Black Mirror'
        ];
        // Montando um html para printar as series
    
        $html = "<ul>";
        foreach($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";
    
        return $html;
        
}
@extends('layout')
@section('cabecalho')

Séries do Ricardinho
@endsection

@section('conteudo')
    <div class="mt-2">
        <div class="alert alert-success">
            
            {{ $mensagem }}
        </div>
    </div>
<a href="/series/criar" class="btn btn-dark mb-2 mt-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
        <li class="list-group-item">{{ $serie->nome }}</li>
    @endforeach
</ul>

@endsection
@extends('layout')
@section('cabecalho')

Séries do Ricardinho
@endsection

@section('conteudo')

@if(!empty($mensagem))
    <div class="mt-2">
        <div class="alert alert-success">
            
            {{ $mensagem }}
        </div>
    </div>
@endif

<a href="{{ route('form_criar_serie')}}" class="btn btn-dark mb-2 mt-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}
            <form method="post" action="/series/{{$serie->id}}"
                  onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($serie->nome)}} ?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">LIXO</button>
            </form>
        </li>
    @endforeach
</ul>

@endsection
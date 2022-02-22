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
                <button class="btn btn-danger btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1z"/>
                      </svg>
                </button>
            </form>
        </li>
    @endforeach
</ul>

@endsection
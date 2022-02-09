@extends('layout')
@section('cabecalho')

Adicionar Séries do Ricardinho
@endsection
@section('conteudo')
   
    <form method="post">
        <div class="form-group mt-2">
            <label for="name" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="name">
        </div>
    </form>
    <div class="mt-2">
        <button class="btn btn-primary">Adicionar</button>
        <a href="/series" class="btn btn-dark">Voltar</a>
    </div>

@endsection
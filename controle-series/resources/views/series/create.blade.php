@extends('layout')
@section('cabecalho')

Adicionar Séries do Ricardinho
@endsection
@section('conteudo')
   
        <form method="post">
            <div class="form-group">
                <label for="name" class="">Nome</label>
                <input type="text" class="form-control" name="nome" id="name">
            </div>
        </form>
        <button class="btn btn-primary">Adicionar</button>
        <a href="/series" class="btn btn-dark mb-2">Voltar</a>

        @endsection
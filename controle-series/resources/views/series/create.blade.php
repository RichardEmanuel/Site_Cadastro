@extends('layout')
@section('cabecalho')

Adicionar Séries do Ricardinho
@endsection
@section('conteudo')

<!-- /resources/views/post/create.blade.php -->
 
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
   
    <form method="post">
        <!-- para resolver o B.O. da segurança do laravel -->
        @csrf
        <div class="form-group mt-2">
            <label for="name" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
            <div class="mt-2">
                <button class="btn btn-primary">Adicionar</button>
                <a href="/series" class="btn btn-dark">Voltar</a>
            </div>
        </div>
    </form>

@endsection
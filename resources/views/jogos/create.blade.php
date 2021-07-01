@extends('layouts.app')


@section('title')

Renato Campeao

@endsection



@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h1>Crie um novo Jogo</h1>
            <hr>
            <form action="{{route('jogos-store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="" placeholder="Digite o nome do jogo">

                    </div>
                    <div class="form-group">
                        <label for="nome">Categoria</label>
                        <input class="form-control" type="text" name="categoria" id="" placeholder="Digite acategoria do jogo">

                    </div>
                    <div class="form-group">
                        <label for="nome">Ano De Lancamento</label>
                        <input class="form-control" type="number" name="ano_lancamento" id="" placeholder="Digite o ano de Lançamento">

                    </div>
                    <div class="form-group">
                        <label for="nome">Preço</label>
                        <input class="form-control" type="number" name="preco" id="" placeholder="Digite o Valor">

                    </div>
                    <div class="for-group">
                       <input type="submit" class="btn btn-primary mt-3" value="Cadastrar">
                       <a href="{{route('jogos-index')}}" class="btn btn-warning mt-3">Voltar</a>
                    </div>

                </div>


            </form>
        </div>

    </div>
</div>

@endsection
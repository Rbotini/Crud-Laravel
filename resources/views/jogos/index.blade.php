@extends('layouts.app')


@section('title')

Renato Campeao

@endsection



@section('content')
<div class="container">
    <div class="row">
    <div class="col-10">
    <h1>Lista de Jogos</h1>
    </div>
    <div class="col-2 mt-3">
    <a href="{{route('jogos-create')}}" class="btn btn-success">Novo Jogo</a>
    </div>
       
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Preco</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>

                @foreach($jogos as $jogo)
                <tr>
                    <th scope="row">{{$jogo->id}}</th>
                    <th>{{$jogo->nome}}</th>
                    <th>{{$jogo->categoria}}</th>
                    <th>{{$jogo->ano_lancamento}}</th>
                    <th>{{$jogo->preco}}</th>
                    <th>
                      <form action="{{route('jogos-destroy',['id'=>$jogo->id]) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" type="submit">Deletar</button>
                      </form>
                    
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>


@endsection
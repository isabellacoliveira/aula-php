@extends('base')
@section('conteudo')
<a href="/computadores/create">Novo</a>
<p>Marca Preço RAM Disco</p>
@foreach($ComputadorCollection as $computador)
    <p>{{$computador->marca}} {{$computador->preco}} {{$computador->ram}} {{$computador->disco}} </p>
    @endforeach
    @endsection
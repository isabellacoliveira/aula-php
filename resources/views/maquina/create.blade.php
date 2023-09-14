@extends('base')
@section('conteudo')
<form action="/maquinas" method="post">
    @csrf
    <p>codigo: <input type="number" name="codigo" value="{{old('codigo')}}"/> </p>
    @if($errors->has('codigo'))
        <p>{{$errors->first('codigo')}}</p>
    @endif
    <p>sigla: <input type="text" name="sigla" value="{{old('sigla')}}"/> </p>
    @if($errors->has('sigla'))
        <p>{{$errors->first('sigla')}}</p>
    @endif
    <p>dataCompra: <input type="text" name="dataCompra" value="{{ old('dataCompra') }}" placeholder="YYYY-MM-DD"/> </p>
    @if($errors->has('dataCompra'))
        <p>{{$errors->first('dataCompra')}}</p>
    @endif
    <p>potencialNominal: <input type="number" name="potencialNominal" value="{{old('potencialNominal')}}"/> </p>
    @if($errors->has('potencialNominal'))
        <p>{{$errors->first('potencialNominal')}}</p>
    @endif
    <p>capacidadeProducao: <input type="number" name="capacidadeProducao" value="{{old('capacidadeProducao')}}"/> </p>
    @if($errors->has('capacidadeProducao'))
        <p>{{$errors->first('capacidadeProducao')}}</p>
    @endif
    <p>valorCompra: <input type="number" name="valorCompra" value="{{old('valorCompra')}}"/> </p>
    @if($errors->has('valorCompra'))
        <p>{{$errors->first('valorCompra')}}</p>
    @endif
    <p>
        <input type="submit" value="enviar">
        <a href="/maquinas">Voltar</a>
    </p>
</form>
@endsection
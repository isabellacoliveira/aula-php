@extends('base')
@section('conteudo')
<form action="/computadores/{{$objetoComputador->id}}" method="post">
    @method('put')
    @csrf
    <p>Marca: <input type="text" name="marca" value ="{{$objetoComputador->marca}}" /></p>
    <p>Preço: <input type="number" name="preco" step = "0.01" value= "{{$objetoComputador->preco}}" /> </p>
    <p>RAM: <input type="number" name="ram" value ="{{$objetoComputador->ram}}"/> </p>
    <p>Disco: <input type="number" name="disco" value ="{{$objetoComputador->disco}}" /> </p>
    <p>
        <input type="submit" value="enviar">
        <a href="/computadores">Voltar</a>
    </p>
</form>
@endsection
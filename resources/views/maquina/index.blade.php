@extends('base')
@section('conteudo')
<a href="/maquinas/create">Novo</a>
<p>id sigla dataCompra potencialNominal capacidadeProducao valorCompra</p>
    @foreach($MaquinaCollection as $maquina)
    <p>{{$maquina->codigo}} {{$maquina->descricao}} {{$maquina->unidade}} {{$maquina->estoqueAtual}} {{$maquina->estoqueMinimo}}  <a href="/maquinas/{{$maquina->id}}/edit">Editar</a> 
    <form method="POST" action="{{ route('maquinas.destroy', $maquina->id) }}">
    @csrf
    @method('DELETE')

        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este maquina?')">Excluir</button>
    </form></p>
    @endforeach

    {{ $MaquinaCollection->links() }}
@endsection
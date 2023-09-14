<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use App\Http\Requests\MaquinaRequest; // Importe a classe MaquinaRequest aqui


class MaquinaController extends Controller
{
    public function index()
    {
        return view('maquina.index')->with('MaquinaCollection',Maquina::paginate(5));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('maquina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MaquinaRequest $request)
    {
        $maquina = new Maquina();
        $maquina->codigo = $request->input('codigo');
        $maquina->sigla = $request->input('sigla');
        $maquina->dataCompra = $request->input('dataCompra');
        $maquina->potencialNominal = $request->input('potencialNominal');
        $maquina->capacidadeProducao = $request->input('capacidadeProducao');
        $maquina->valorCompra = $request->input('valorCompra');

        
    
        // Salve o material no banco de dados
        $maquina->save();
        return redirect('/maquinas');
    }

    
    /**
     * Show the form for editing the specified resource.    
     */
    public function edit(Maquina $maquina)
    {
        //
        return View('maquina.edit')->with('objetoMaquina',$maquina);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaquinaRequest $request, Maquina $maquina)
    {
        $maquina-> update( $request->all() );
        return redirect('/maquinas');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maquina $maquina)
    {
        //
        $maquina->delete();
        return redirect('/maquinas');
    }


}

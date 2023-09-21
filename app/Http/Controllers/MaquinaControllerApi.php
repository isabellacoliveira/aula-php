<?php

namespace App\Http\Controllers;
use App\Http\Resources\Maquina as MaquinaResource;
use Illuminate\Http\Request; // Importe a classe Request
use App\Models\Maquina;

class MaquinaControllerApi extends Controller
{
    public function index(){
        $MaquinaCollection = Maquina::all(); // Corrigido o nome da variável
        return MaquinaResource::collection($MaquinaCollection); // Corrigido o uso da classe de recursos
    }
    
    public function store(Request $request){ // Corrigido o tipo de parâmetro da função
        $dados = $request->all(); // Corrigido o uso da variável $request
        $f = Maquina::create($dados);
        return response()->json($f, 201); 
    } 
}

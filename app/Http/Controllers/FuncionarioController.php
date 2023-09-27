<?php

namespace App\Http\Controllers;

use App\Http\Resources\Funcionario as FuncionarioResource;

class FuncionarioController extends Controller
{

    public function apiFind(Funcionario $funcionario)
    {
        return new FuncionarioResource($funcionario);
    }

    public function apiAll()
    {
        return FuncionarioResource::collection(Funcionario::all());
    }

    public function apiStore(Request $request)
    {
        try {
            $funcionario = Funcionario::create($request->all());
            return response()->json($funcionario, 201);
        } catch (\Exception $ex) {
            return response()->json(null, 400);

        }

    }


    public function apiDelete(Funcionario $funcionario)
    { // 404 se model não existe 
        try {
            $funcionario->delete();
            return response()->json(null, 204);
        } catch (\Exception $ex) {
            return response()->json(null, 400);
        }
    }

}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquinaControllerApi;

Route::middleware('auth: api')->get('/user', function (Request $request) { 
    return $request->user();
});

Route::get('/maquinas',[MaquinaControllerApi::class,'index']);
Route::get('/maquinas/{maquina}',[MaquinaControllerApi::class,'store']);
Route::post('/maquinas',[MaquinaControllerApi::class,'apiStore']);
Route::put('/maquinas/{maquina}',[MaquinaControllerApi::class,'apiUpdate']);
Route::delete('/maquinas/{maquina}',[MaquinaControllerApi::class,'apiDelete']);


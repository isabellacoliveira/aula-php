
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquinaControllerApi;

Route::middleware('auth: api')->get('/user', function (Request $request) { 
    return $request->user();
});

Route::get('/maquinas/{maquina}', 'MaquinaControllerApi@apiFind');
Route::get('/maquinas', 'MaquinaControllerApi@apiAll');
Route::post('/maquinas', 'MaquinaControllerApi@apiStore');
Route::put('/maquinas/{maquina}', 'MaquinaControllerApi@apiUpdate');
Route::delete('/maquinas/{maquina}', 'MaquinaControllerApi@apiDelete');



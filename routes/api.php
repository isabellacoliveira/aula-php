
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquinaControllerApi;
use App\Http\Controllers\ProdutoControllerAPI;
use App\Http\Controllers\PedidoControllerAPI;

Route::resource('pedidos',PedidoControllerAPI::class);

Route::resource('produtos',ProdutoControllerAPI::class);

Route::resource('maquinas',MaquinaControllerApi::class);

Route::middleware('auth: api')->get('/user', function (Request $request) {
    return $request->user();
});


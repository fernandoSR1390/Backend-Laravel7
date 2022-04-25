<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos', [ProductoController::class,'index']);//mostrar los productos
Route::post('/productos', [ProductoController::class,'store']);//crear un producto
Route::put('/productos/{id}', [ProductoController::class,'update']);//actualizar un producto
Route::delete('/productos/{id}', [ProductoController::class,'destroy']);//eliminar un producto
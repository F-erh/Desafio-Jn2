<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControleController;
 use App\Http\Resources\ControleResource;
 use App\Controle;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List controles
Route::get('controles/', [ControleController::class, 'index']);

// List single controle
Route::get('controle/{id}', [ControleController::class, 'show']);

// List by final of Placa_do_Carro
Route::get('controle/{Placa_do_Carro}', [ControleController::class, 'show_Placa_do_Carro']);

// Create new controle
Route::post('controle', [ControleController::class, 'store']);

// Update controle
Route::put('controle/{id}', [ControleController::class, 'update']);

// Delete controle
Route::delete('controle/{id}', [ControleController::class,'destroy']);

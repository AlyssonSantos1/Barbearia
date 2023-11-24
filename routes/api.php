<?php

use App\Http\Controllers\BandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [BarberController::class, 'getall']);
Route::post('/adicionarservico', [BarberController::class, 'create']);
Route::put('/atualizarservico/{id}',[BarberController::class, 'update']);
Route::get('/excluirservico/{id}',[BarberController::class, 'destroy']);
Route::get('/mostrarservico/{id}',[BarberController::class, 'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

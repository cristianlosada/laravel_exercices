<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HospedajesController;

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


// forma de acceder a las rutas de forma individual 
Route::get('/users', [UserController::class, 'index']); // Ruta para obtener la lista de usuarios
Route::get('/users/{id}', [UserController::class, 'show']); // Ruta para obtener los detalles de un usuario específico


// forma de acceder a las rutas agrupadas
Route::controller(HospedajesController::class)->group(function () {
    Route::get('/hospedajes',      'index');
    Route::get('/hospedajes/{hospedajes:id}', 'show');
});






// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

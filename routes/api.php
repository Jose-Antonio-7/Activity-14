<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\MediaController;
use App\Models\Media;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/note',[NoteController::class,'getNote']);
Route::get('/note/{id}',[NoteController::class,'getNoteid']);
Route::post('/note/insert',[NoteController::class,'insertNote']);
Route::put('/note/update/{id}',[NoteController::class,'updateNote']);
Route::delete('/note/delete/{id}',[NoteController::class,'deleteNote']);

Route::get('/personaje',[PersonajeController::class,'getPersonajes']);//Puede ver todos los personajes
Route::get('/personaje/token/{id}',[PersonajeController::class,'getTokenAccess']);//Genera token de accesso

Route::middleware('auth:sanctum')->get('/media',[MediaController::class,'getMedia']);//Usa la autenticación de token
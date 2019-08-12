<?php

use Illuminate\Http\Request;

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
 
Route::get('/status', function(){
    return['status' => 'ok']; 
});

Route::namespace('Api')->group(function(){
    // Busca todas as piadas
    Route::get('/piadas','PiadasController@piadas');

    // Busca piada pelo id
    Route::get('/piadas/{id}','PiadasController@getPiadas');

    // Inserir piada
    Route::post('/piadas','PiadasController@addPiada');

    // Inserir piada
    Route::put('/piadas/{id}','PiadasController@atualizarPiada');

     // Inserir piada
     Route::delete('/deletePiada/{id}','PiadasController@deletarPiada');
});
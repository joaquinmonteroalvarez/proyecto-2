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
Route::get('v1/color','colorController@index');
Route::get('v1/size','sizeController@index');
Route::get('v1/modelo','modeloController@index');
Route::get('v1/notebook/get/{modelid}/{colorid}/{sizeid}','notebookController@getNotebook');
Route::resource('v1/notebook','notebookController', ['only' => ['index', 'show','getImage']]);
Route::resource('v1/notebookuser','notebookuserController', ['only' => ['index', 'show','update','store','destroy']]);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/matriculas','\App\Http\Controllers\MatriculaRestController@index');
Route::post('/matriculas','\App\Http\Controllers\MatriculaRestController@store');
Route::put('/matriculas/{matriculas}','\App\Http\Controllers\MatriculaRestController@update');
Route::delete('/matriculas/{matriculas}','\App\Http\Controllers\MatriculaRestController@destroy');
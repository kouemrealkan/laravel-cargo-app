<?php

use App\Http\Controllers\RestContoller\AdminRestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/v1/users/login',[AdminRestController::class,'userLogin']);
Route::post('/v1/users/logout',[AdminRestController::class,'logout']);

Route::get('/v1/users',[AdminRestController::class,'usersAPI']);
Route::get('/v1/users/{id}',[AdminRestController::class,'usersFindById']);
Route::get('/v1/users/search/{name}',[AdminRestController::class,'usersFindByName']);



Route::get('/v1/cargo-list',[AdminRestController::class,'cargoList']);
Route::get('/v1/cargo-list/{track_number}',[AdminRestController::class,'searchCargoByTrackNumber']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

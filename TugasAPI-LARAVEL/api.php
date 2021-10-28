<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

// Ahmad Fauzan 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#route return data animal GET return
Route::get('/animals', [AnimalController::class, 'index'] );

Route::get('/animals/{id}', [AnimalController::class, 'getID']);

#route return data animal POST storing
Route::post('/animals', [AnimalController::class, 'create'] );

#route return data animal PUT update
Route::put('/animals/{id}', [AnimalController::class, 'update'] );

#route return data animal DELETE hapus
Route::delete('/animals/{id}', [AnimalController::class, 'destroy'] );
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoalController;

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

Route::post('/register', [UserController::class, 'create']);



Route::get('/goals/all', [GoalController::class, 'index']);

Route::post('/goals/create', [GoalController::class, 'create']);

Route::post ('/goals/update/{id}', [GoalController::class, 'update']);

Route::delete('/goals/destroy/{id}', [GoalController::class, 'destroy']);

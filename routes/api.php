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

Route::group(['middleware' => ['auth:api']], function () {
    // gets user with all order data
    Route::get('/user', [UserController::class, 'index']);
    // log out user
    Route::get('/logout', [UserController::class, 'logout']);


    Route::get('/goals/all', [GoalController::class, 'all']);

    Route::get('/goals/personal', [GoalController::class, 'personal']);

    Route::post('/goals/create', [GoalController::class, 'create']);

    Route::post('/goals/update/{id}', [GoalController::class, 'update']);

    Route::delete('/goals/destroy/{id}', [GoalController::class, 'destroy']);
});

Route::post('/register', [UserController::class, 'create']);

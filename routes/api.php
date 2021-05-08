<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\CommentController;

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

    Route::get('/user', [UserController::class, 'index']);
    // log out user
    Route::get('/logout', [UserController::class, 'logout']);


    Route::get('/goals/all', [GoalController::class, 'all']);

    Route::get('/goals/personal', [GoalController::class, 'personal']);

    Route::post('/goal/create', [GoalController::class, 'create']);

    Route::post('/goal/update/{id}', [GoalController::class, 'update']);

    Route::delete('/goal/destroy/{id}', [GoalController::class, 'destroy']);


    Route::post('/comment/create', [CommentController::class, 'create']);

    Route::get('/comment/all', [GoalController::class, 'all']);
});

Route::post('/register', [UserController::class, 'create']);

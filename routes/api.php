<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\AuthController;
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

//PROTECTED ROUTES
Route::group(['middleware' => ['auth:sanctum']],function () {
    Route::post('/teams', [TeamController::class, 'create']);
    // Route::post('/logout', [AuthController::class, 'logout']);
});

//PUBLIC ROUTES
//teams
Route::get("search/{address}",[TeamController::class,'search']);
Route::get('/teams', [TeamController::class, 'show']);


Route::apiResource('teams', TeamController::class);

//users
// Route::post('/register', [AuthController::class,'register']);
// // Route::post('/login', [AuthController::class, 'login']);
// Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/profile', [AuthController::class, 'profile']);

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These         
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/{any}', 'create')
//     ->middleware(['auth'])
//     ->where('any', '.*');

// Route::get('{any}', function () {
//     return view('welcome');
// })->where('any', '.*');

// Route::get('/show', function () {
//     return view('teams/show');
// });

// Route::view('add', 'teams.create');
// Route::post('add',[TeamController::class,'addTeam']);

// Route::get('show',[TeamController::class,'show']);

// Route::get('search',[TeamController::class,'search']);
 
// Auth::routes(); 

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/team', [\App\Http\Controllers\TeamController::class, 'create'])->name('team');
//Route::get('/show', [\App\Http\Controllers\TeamController::class, 'show'])->name('show');

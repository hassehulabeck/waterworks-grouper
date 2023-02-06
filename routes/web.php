<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VoteController;
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
    return view('index');
});

Route::get('vote', [VoteController::class,'create']);
Route::post('vote', [VoteController::class,'store']);

Route::get('login', [AdminController::class, 'renderForm'])->name('login');
Route::post('login', [AdminController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::post('/admin', [AdminController::class, 'setGroups'])->middleware('auth');

Route::get('/groups', [VoteController::class, 'index']);
<?php

use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eleves', EleveController::class);
Route::resource('clubs', ClubsController::class);
Route::resource('activites', ActivitesController::class);


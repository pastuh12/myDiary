<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SectionController;
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

//Route::get('/section', [])

Route::get('/', [HomeController::class, 'index']);
Route::get('/section', [SectionController::class, 'dailyThoughts']);
Route::get('/section/ideas', [SectionController::class, 'ideas']);
Route::get('/section/goals', [SectionController::class, 'goals']);


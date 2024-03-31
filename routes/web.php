<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KelasController;
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

Route::get("/", function(){
  return view('home', [
    'title' => 'Home'
  ]);
});

Route::get("/dashboard", function () {
  return view("layouts.dashboard", [
    "title" => "Dashboard",
  ]);
});

Route::get('/speaking', [BukuController::class, 'speaking']);
Route::get('/listening', [BukuController::class, 'listening']);
Route::get('/reading', [BukuController::class, 'reading']);
Route::get('/translation', [BukuController::class, 'translation']);

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
})->name('home');
Route::resource('sous-groupe', SousGroupeController::class);
Route::resource('parametre', ParametreController::class);
Route::resource('patient', PatientController::class);
Route::resource('machine', MachineController::class);

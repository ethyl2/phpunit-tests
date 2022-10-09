<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumeralsController;

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

Route::get('/alpha', function () {
    return view('alpha');
});

Route::get('/beta', function () {
    return view('beta');
});

Route::get('/omega', function () {
    return view('omega');
});

Route::get('/roman-numerals', [RomanNumeralsController::class, 'index']);

Route::post('/roman-numerals', [RomanNumeralsController::class, 'store']);


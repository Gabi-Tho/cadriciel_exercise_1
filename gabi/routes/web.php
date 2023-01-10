<?php

use App\Http\Controllers\GabiController;
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
    return view('home');
});


           // URL    //class                //function
Route::get('/home', [GabiController::class, 'home']);
Route::get('/about', [GabiController::class, 'about']);
Route::get('/services', [GabiController::class, 'services']);
Route::get('/contact', [GabiController::class, 'contact']);


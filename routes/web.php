<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

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

Route::get('/', [HomepageController::class,'index'])->name('homepage');
Route::get('/login', [HomepageController::class,'login'])->name('login');
Route::get('/register', [HomePageController::class,'register'])->name('registration');


Route::post('/login', [HomePageController::class,'loginsubmit'])->name('loginsubmit');

Route::post('/register', [HomePageController::class,'registerSubmit'])->name('registerSubmit');

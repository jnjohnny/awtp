<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\sb;
use App\Http\Controllers\sbController;
use App\Http\Controllers\colonyController;


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

Route::get('/', [HomePageController::class,'index'])->name('homepage');

Route::get('/login', [HomePageController::class,'login'])->name('login');
Route::get('/register', [HomePageController::class,'register'])->name('registration');


Route::post('/login', [HomePageController::class,'loginsubmit'])->name('loginsubmit');

Route::post('/register', [HomePageController::class,'registerSubmit'])->name('registerSubmit');

//pronblem paisi
//Route::get('/sd', [sb::class,'dashboard'])->name('dashboard');

//Route::get('/sdash', [HomePageController::class,'dashboardforsingle'])->name('sd');

//Route::get('/building', [HomePageController::class,'building'])->name('mybuilding');

//Route::get('/buildingdetails', [HomePageController::class,'buildingdt'])->name('buildingdt');
//Route::get('/buildingdetails', [HomePageController::class,'buildingdt'])->name('buildingdt');

//single building routes
Route::get('sb', [sbController::class,'Dashboard'])->name('dbb');
Route::get('/addb', [sbController::class,'addbuild'])->name('addb');
Route::post('/addbr', [sbController::class,'buildingSubmit'])->name('buildingSubmit');


Route::get('/addbbd', [sbController::class,'addDB'])->name('adetails');
Route::post('/bdsubmit', [sbController::class,'BDSubmit'])->name('detailsSubmit');


Route::get('/current', [sbController::class,'current'])->name('current');
Route::post('/currentbill', [sbController::class,'currentSubmit'])->name('currentSubmit');

Route::get('/buildlist', [sbController::class,'list'])->name('list');
Route::post('/buildlistsearch', [sbController::class,'searchlist'])->name('searchlist');

Route::get('/buildsearchlist', [sbController::class,'searchl'])->name('searchl');
Route::get('/printpdf', [sbController::class,'printPdf'])->name('printpdf');

Route::get('sbb', [sbController::class,'logout'])->name('logout');


//colonyRoute


Route::get('/colony/Dashboard', [colonyController::class,'dashboardColony'])->name('dc');

Route::get('/colony/add', [colonyController::class,'addcolony'])->name('addcolony');
Route::post('/colony/submit', [colonyController::class,'colonySubmit'])->name('colonySubmit');

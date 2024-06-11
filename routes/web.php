<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
})->name("welcome");

//pour l'inscription utullisateur 
Route::get('/inscription', [UserController::class,'create'])->name('create');
Route::post('/inscription', [UserController::class,'store'])->name('store');

//pour la connexion utulisateur 
Route::get('/connexion', [UserController::class,'connect'])->name('connect');
Route::post('/connexion', [UserController::class,'show'])->name('login');


Route::get('/dashboard', [UserController::class,'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/admin', [UserController::class,'admin'])->name('admin');

Route::get('/admin/request', [EquipmentRequestControlle::class,'index'])->name('userRequests');


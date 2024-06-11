<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestEquipmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#dashbord de l'administrateur 
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');



Route::resource('transaction', EquipmentTransactionController::class);

############requette pour les demandes des tulisateur ##################

Route::resource('request_equipments', RequestEquipmentController::class);
Route::post('request_equipments/{requestEquipment}/approve', [RequestEquipmentController::class, 'approve'])->name('request_equipments.approve');
Route::post('request_equipments/{requestEquipment}/reject', [RequestEquipmentController::class, 'reject'])->name('request_equipments.reject');

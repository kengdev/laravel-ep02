<?php

use App\Http\Controllers\Covid19Controller;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::resource('/covid19', Covid19Controller::class);

/*Route::get('/covid19', [Covid19Controller::class, 'index']);

Route::get('/covid19/create', [Covid19Controller::class, 'create']);

Route::get('/covid19/{id}/edit', [Covid19Controller::class, 'edit']);

Route::get('/covid19/{id}', [Covid19Controller::class, 'show']);

Route::post('/covid19',[ Covid19Controller::class , 'store' ]);

Route::patch('/covid19/{id}', [ Covid19Controller::class , 'update' ]);

Route::delete('/covid19/{id}', [Covid19Controller::class, 'destroy']);*/

//Route::put('/orders',[ OrdersController::class , 'storeData' ]);

Route::resource('orders', OrdersController::class);

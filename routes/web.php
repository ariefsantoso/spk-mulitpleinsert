<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\erp;
use App\Http\Controllers\ErpController;

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

// Route::get('/', function () {
//     return view('index');
// });


Route::resource('/', ErpController::class);
Route::get('/edit/{id}', [ErpController::class, 'edit']);
Route::post('/update/{id}', [ErpController::class, 'update']);
Route::delete('/delete/{id}', [ErpController::class, 'destroy']);

Route::get('/print/{id}',  [ErpController::class, 'print']);

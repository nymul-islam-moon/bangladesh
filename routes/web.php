<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\UpazilaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Division

Route::get('/', [DivisionController::class, 'index'])->name('division.index');
Route::post('/division-store', [DivisionController::class, 'store'])->name('division.store');
Route::post('/division/{division}/destroy', [DivisionController::class, 'destroy'])->name('division.destroy');



// District

Route::get('/district-index', [DistrictController::class, 'index'])->name('district.index');
Route::post('/district-store', [DistrictController::class, 'store'])->name('district.store');
Route::post('/district/{district}/destroy', [DistrictController::class, 'destroy'])->name('district.destroy');



// Upazila

Route::get('/upazila-index', [UpazilaController::class, 'index'])->name('upazila.index');
Route::post('/upazila-store', [UpazilaController::class, 'store'])->name('upazila.store');
Route::post('/upazila/{district}/destroy', [UpazilaController::class, 'destroy'])->name('upazila.destroy');


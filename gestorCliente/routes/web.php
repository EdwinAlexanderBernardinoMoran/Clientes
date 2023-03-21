<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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
//     return view('client.index');
// });

Route::get('/', [ClienteController::class, 'index'])->name('index');
Route::get('register', [ClienteController::class, 'create'])->name('create');
Route::post('create', [ClienteController::class, 'store'])->name('store');
Route::get('cliente/{id}', [ClienteController::class, 'show'])->name('show');
Route::get('cliente/{id}/edition', [ClienteController::class, 'edit'])->name('edit');
Route::put('cliente/{id}/', [ClienteController::class, 'update'])->name('update');
Route::delete('cliente/{cliente}', [ClienteController::class, 'destroy'])->name('destroy');

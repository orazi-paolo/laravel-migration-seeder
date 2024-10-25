<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainController;

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

// rotta per la pagina dei treni collegata al metodo index del train controller
Route::get('/', [TrainController::class, 'index'])->name('train.index');
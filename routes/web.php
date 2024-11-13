<?php

use App\Http\Controllers\EcomController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/',[EcomController::class,'indexPageLoad'])->name('Begin');
Route::get('/library',[EcomController::class,'libraryPageLoad'])->name('our_library');
Route::get('/our-notes',[EcomController::class,'ourNotesPageLoad'])->name('our_notes');

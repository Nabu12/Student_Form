<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Route::get('/',[StudentController::class,'index']);
Route::post('/create',[StudentController::class,'create'])->name('create');
Route::get('/show',[StudentController::class,'show'])->name('show');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/update/{id}',[StudentController::class,'update'])->name('update');
Route::get('/delete/{id}',[StudentController::class,'delete'])->name('delete');
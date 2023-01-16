<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;


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



Route::get('/', [LibraryController::class, 'lending'])->name('lending');
Route::get('/login', [LibraryController::class, 'login'])->name('login');
Route::post('/login', [LibraryController::class, 'auth'])->name('login.auth');
Route::get('/register', [LibraryController::class, 'register'])->name('register');
Route::post('/register', [LibraryController::class, 'inputRegister'])->name('register.post'); 

Route::get('/dashboard/user', [LibraryController::class, 'user'])->name('user'); //dashboard user 


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
Route::get('/register', [LibraryController::class, 'register'])->name('register');


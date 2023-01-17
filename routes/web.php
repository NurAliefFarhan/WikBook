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
Route::get('/logout', [LibraryController::class, 'logout'])->name('logout');


Route::get('/dashboardUser/user', [LibraryController::class, 'user'])->name('user'); //dashboard user 


Route::get('/dashboardAdmin/admin', [LibraryController::class, 'admin'])->name('admin'); //dashboard admin  
Route::delete('/delete/{id}', [LibraryController::class, 'destroy'])->name('delete'); //route untuk btn delete todo index 
Route::get('/edit/{id}', [LibraryController::class, 'edit'])->name('edit'); //untuk mengedit-> {id} untuk mengedit id yang dipilih
Route::patch('/update/{id}', [LibraryController::class, 'update'])->name('update');
Route::get('/dashboardAdmin/userAdmin', [LibraryController::class, 'userAdmin'])->name('userAdmin'); //dashboard admin  
Route::get('/dashboardAdmin/book', [LibraryController::class, 'book'])->name('book'); //dashboard admin  
Route::post('/dashboardAdmin/book', [LibraryController::class, 'inputBook'])->name('book.post'); 

Route::get('/dashboardAdmin/category', [LibraryController::class, 'category'])->name('category'); //dashboard admin  
Route::post('/dashboardAdmin/category', [LibraryController::class, 'inputCategory'])->name('category.post'); 
Route::delete('/delete/{id}', [LibraryController::class, 'categoryDestroy'])->name('delete'); //route untuk btn delete todo index 



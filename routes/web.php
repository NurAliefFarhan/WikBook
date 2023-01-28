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


//Route login/register 
Route::middleware('isGuest')->group(function () {
    Route::get('/login', [LibraryController::class, 'login'])->name('login');
    Route::post('/login', [LibraryController::class, 'auth'])->name('login.auth');
    Route::get('/register', [LibraryController::class, 'register'])->name('register');
    Route::post('/register', [LibraryController::class, 'inputRegister'])->name('register.post'); 
});

Route::get('/', [LibraryController::class, 'lending'])->name('lending');
Route::get('/logout', [LibraryController::class, 'logout'])->name('logout');



// Route User 
Route::middleware('isLogin')->prefix('/wikbook')->name('wikbook.')->group(function () {
    Route::get('/dashboardUser/user', [LibraryController::class, 'user'])->name('user'); //dashboard user 
    Route::get('/dashboardUser/readbook/{id}', [LibraryController::class, 'readbook'])->name('readbook'); 
    Route::get('/dashboardUser/readbookprint/{id}', [LibraryController::class, 'readbookprint'])->name('readbookprint'); 
});


//Route Admin 
Route::middleware('isLogin')->prefix('/wikbook')->name('wikbook.')->group(function () {
    Route::get('/dashboardAdmin/admin', [LibraryController::class, 'admin'])->name('admin'); //dashboard admin  
    Route::delete('/deleteuser/{id}', [LibraryController::class, 'userdestroy'])->name('deleteuser'); //route untuk btn delete todo index 
    Route::get('/edit/{id}', [LibraryController::class, 'edit'])->name('edit'); //untuk mengedit-> {id} untuk mengedit id yang dipilih
    Route::patch('/update/{id}', [LibraryController::class, 'update'])->name('update');
    Route::get('/dashboardAdmin/userAdmin', [LibraryController::class, 'userAdmin'])->name('userAdmin'); //dashboard admin  
    Route::get('/dashboardAdmin/userAdminprint', [LibraryController::class, 'userAdminprint'])->name('userAdminprint'); //dashboard admin  

    Route::get('/dashboardAdmin/book', [LibraryController::class, 'book'])->name('book'); //dashboard admin  
    Route::post('/dashboardAdmin/book', [LibraryController::class, 'inputBook'])->name('book.post'); 
    Route::delete('/deletebook/{id}', [LibraryController::class, 'bookDestroy'])->name('deletebook'); //route untuk btn delete todo index 
    Route::get('/dashboardAdmin/editbook/{id}', [LibraryController::class, 'editbook'])->name('editbook'); //untuk mengedit-> {id} untuk mengedit id yang dipilih
    Route::patch('/dashboardAmin/updatebook/{id}', [LibraryController::class, 'updatebook'])->name('updatebook');
    Route::get('/dashboardAdmin/category', [LibraryController::class, 'category'])->name('category'); //dashboard admin  
    Route::post('/dashboardAdmin/category', [LibraryController::class, 'inputCategory'])->name('category.post'); 
    Route::delete('/delete/{id}', [LibraryController::class, 'categoryDestroy'])->name('delete'); //route untuk btn delete todo index 

});    



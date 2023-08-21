<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\BorrowBooks;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EnsureIsAdmin;
use App\Http\Controllers\BookController;
use App\Http\Middleware\EnsureIsUser;

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

            //Original URL
Route::get('/', function () {
    return view('welcome');
});


            // Admin Access URLs
Route::middleware(['auth','verified',EnsureIsAdmin::class])->group(function(){              //Three Middlewares used: Authentication, Verification and EnsureIsAdmin

    //Display all the Customers
    Route::get('/admin/customers',[BookController::class,'show_customers'])->name('customers');

    //Add a book in the library frontend
    Route::get('/admin/addbook',[BookController::class,'add_book'])->name('add_book');

    //Add a book in the library store part
    Route::post('/admin/addbook/store',[BookController::class,'store'])->name('store_book');

    Route::get('/admin/customers/moredetails/{id}',[BookController::class,'moredetails'])->name('more_details');
    
});


            // Borrowed Books
Route::get('/books',[BorrowBooks::class,'details'])->middleware('auth','verified',EnsureIsUser::class)->name('your_books');

            
            // All library Books
Route::get('/all_books',[BookController::class,'display'])->middleware(['auth','verified'])->name('all_books');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// this is new commemnt
//fdyfgtygfytg
require __DIR__.'/auth.php';

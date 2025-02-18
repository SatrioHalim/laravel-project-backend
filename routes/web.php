<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CartController;
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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/mail', [MailController::class, 'sendMail'])->name('sendMail');
// buat ngetes kirim email, bisa cek di web mailtrap

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('admin')->group(function(){
    Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');
    //buat nampilin halaman form

    Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');
    //buat ngepost data create book

    Route::get('/update/{id}', [BookController::class, 'getBookById'])->name('getBookById');
    //buat tampilan form update

    Route::patch('/update/{id}', [BookController::class, 'updateBook'])->name('updateBook');
    //buat update data ke database

    Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');
    //hapus data dari database
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/get-books', [BookController::class, 'getBooks'])->name('getBooks');
    // buat nampilin data

    Route::get('/cart', [CartController::class, 'getCart'])->name('getCart');
    // buat nampilin halaman cart
    Route::post('/cartStore', [CartController::class, 'cartStore'])->name('cartStore');
    // buat masukin ke tabel cart

});






Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-category', [CategoryController::class, 'apiGetCategory']);

Route::post('/create-category', [CategoryController::class, 'apiCreateCategory']);

Route::patch('/update-category/{id}', [CategoryController::class, 'apiUpdateCategory']);

Route::delete('/delete-category/{id}', [CategoryController::class, 'apiDeleteCategory']);

// Route::get('/get-category', [BookController::class, 'apiGetBooks']);

// Route::post('/create-category', [BookController::class, 'apiAddCategory']);

// Route::delete('/delete-category/{id}', [BookController::class, 'apiDeleteCategory']);

// Route::patch('/update-category/{id}',[BookController::class, 'apiUpdateCategory']);

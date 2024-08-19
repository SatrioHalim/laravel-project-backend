<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyerController;
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

Route::get('/get-category', [BookController::class, 'apiGetBooks']);

Route::post('/create-category', [BookController::class, 'apiAddCategory']);

Route::delete('/delete-category/{id}', [BookController::class, 'apiDeleteCategory']);

Route::patch('/update-category/{id}',[BookController::class, 'apiUpdateCategory']);

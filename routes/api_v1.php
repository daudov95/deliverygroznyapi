<?php

use App\Http\Controllers\API\v1\CategoryController;
use App\Http\Controllers\API\v1\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/users", function () {
   return "all users";
});

Route::apiResource('stores', StoreController::class);
Route::apiResource('categories', CategoryController::class);

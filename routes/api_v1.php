<?php

use App\Http\Controllers\Api\RestaurantsController;
use Illuminate\Http\Request;
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
/* get restaurants */
Route::get('/restaurants', [RestaurantsController::class, 'allRestaurants']);
Route::get('/restaurants/{id}', [RestaurantsController::class, 'singleRestaurant']);

/* get restaurants products */
Route::get('/restaurants/{id}/items', [RestaurantsController::class, 'itemsRestaurant']);



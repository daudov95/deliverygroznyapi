<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RestaurantCollection;
use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{

    public function allRestaurants () {
        $restaurants = Restaurant::all();


        if(!$restaurants) {
            return response()->json([
                'status' => false,
                'message' => 'Restaurants not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => new RestaurantCollection(new RestaurantResource($restaurants))
        ], 200);
    }

    public function singleRestaurant ($id) {
        $restaurant = Restaurant::find($id);

        if (!$restaurant) {
            return response()->json([
                'status' => false,
                'message' => 'Restaurant not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => new RestaurantResource($restaurant)
        ], 200);
    }

    public function itemsRestaurant($id) {

        $items = Restaurant::find($id);

        if (!$items) {
            return response()->json([
                'status' => false,
                'message' => 'Restaurant products not found'
            ], 404);
        }



        return response()->json([
            'status' => true,
            'restaurant' => new RestaurantResource($items),
            'items' => $items->products // Сделать вывод связанных товаров ресторана
        ], 200);
    }
}

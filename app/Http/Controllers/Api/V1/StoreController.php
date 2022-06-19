<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\StoreCollection;
use App\Http\Resources\StoreItemCollection;
use App\Http\Resources\StoreItemResource;
use App\Http\Resources\StoreResource;
use App\Models\Store;

class StoreController extends Controller
{
    public function allStores() {
        $stores = Store::all();

        if(!$stores) {
            return response()->json([
                'status' => false,
                'message' => 'Stores not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => new StoreCollection(new StoreResource($stores))
        ], 200);
    }

    public function singleStore($id) {
        $store = Store::find($id);

        if(!$store) {
            return response()->json([
                'status' => false,
                'message' => 'Store not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => new StoreResource($store)
        ], 200);
    }

    public function itemsStore($id) {

        $items = Store::find($id);

        if (!$items) {
            return response()->json([
                'status' => false,
                'message' => 'Store products not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'store' => new StoreResource($items),
            'items' =>  new StoreItemCollection(new StoreItemResource($items->products))
        ], 200);
    }

}

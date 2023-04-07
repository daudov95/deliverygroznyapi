<?php

namespace App\Http\Controllers\API\v1;

use App\Filters\StoreFilter;
use App\Helpers\Helper;
use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Resources\Store\StoreCollection;
use App\Http\Resources\Store\StoreResource;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private int $per_page = 2;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, StoreFilter $filters)
    {
//        dd(Store::find(1)->reviews()->count());
        if($request->filled('limit') && intval($request->query('limit')) > 0){
            $this->per_page = $request->query('limit');
        }

//        dd(new StoreCollection(Store::filter($filters)->get()));
        $store = Store::query()->with(['filters', 'products', 'products.options', 'products.options.list', 'reviews'])->filter($filters)->paginate($this->per_page)->withQueryString();
        return new StoreCollection($store);
//        $stores = Store::query()->with(['filters', 'products', 'products.options', 'products.options.list'])->orderBy($this->orderBy, $this->direction)->paginate($this->per_page);
//        return new StoreCollection($stores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): StoreResource
    {
        $store = Store::query()->with(['filters', 'products', 'products.options', 'products.options.list'])->findOrFail($id);
        return new StoreResource($store);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

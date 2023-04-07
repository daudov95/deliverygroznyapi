<?php
namespace App\Helpers;


use Illuminate\Http\Request;

class Helper {

    static function setApiQuery(Request $request)
    {
        $keysList = ['limit', 'orderby', 'direction'];
        $list = ['rating', 'id', 'price', 'time', 'is_open'];
//        $queries = [...$queries];

//        foreach ($request->query as $key => $query) {
//            if(in_array($key, $keysList) && in_array($query, $list)) {
//                $this->[$key] = $query;
//            }
//        }
//        if($request->query('limit')) {
//            $this->per_page = $request->query('limit');
//        }
//        if($request->query('orderby')) {
//            $this->orderBy = $request->query('orderby');
//        }
//        if($request->query('direction')) {
//            $this->direction = $request->query('direction');
//        }


        dd('end');
    }
}

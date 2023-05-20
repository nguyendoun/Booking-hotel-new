<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
 
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = City::where('city', 'LIKE', '%'. $query. '%')->pluck('city');
          if($filterResult->count() > 0 ){
            return response()->json($filterResult);
          }else{
            $filterResult = Hotel::where('name', 'LIKE', '%'. $query. '%')->pluck('name');
            return response()->json($filterResult);
          }
    } 
}

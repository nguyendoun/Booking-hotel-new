<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
 
    public function autocompleteSearch(Request $request)
    {
        $query = trim((string) $request->get('query', ''));
        if ($query === '') {
            return response()->json([]);
        }

        // Escape ký tự đặc biệt của LIKE để '%' / '_' từ user input không match wildcards
        $like = '%' . addcslashes($query, '%_\\') . '%';

        $cities = City::where('city', 'LIKE', $like)
            ->limit(5)
            ->get(['id', 'city'])
            ->map(fn($c) => ['type' => 'city', 'id' => $c->id, 'label' => $c->city]);

        $hotels = Hotel::where('name', 'LIKE', $like)
            ->limit(10)
            ->get(['id', 'name'])
            ->map(fn($h) => ['type' => 'hotel', 'id' => $h->id, 'label' => $h->name]);

        return response()->json($cities->concat($hotels)->values());
    }
}

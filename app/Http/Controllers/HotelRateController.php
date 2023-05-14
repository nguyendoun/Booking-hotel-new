<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelRate;
use Illuminate\Support\Facades\Auth;

class HotelRateController extends Controller
{

    public function store($id,Request $request)
    {   
        $hotelRate = new HotelRate();
        $hotelRate->hotel_id = $id;
        $hotelRate->user_id = Auth::user()->id;
        $hotelRate->comment =  $request->comment;
        $hotelRate->rate =  $request->rating;
        $hotelRate->save();
        return redirect()->back()->with('message','bình luận thành công');
    }
}

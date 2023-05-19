<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($id);
        return view('booking',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkticked(){
        return view('checkticked');
    }
    public function checkorderstt(Request $request){
        
        $ordercode = $request->input('order_code');
        $sdt = $request->input('number_phone');
       
        $rs = Booking::whereHas('bookingRooms', function ($query) use ($ordercode){
            return $query->where('order_code', $ordercode);
            })->whereHas('bookingInfos', function ($q) use ($sdt){
                return $q->where('phone', $sdt);
                })->first();
        if($rs !== null){
            if($rs->status == 0){
                dd('chờ xác nhận');
            }
            elseif($rs->status == 1){
                dd('đã xác nhận');
            }
        }else{
            dd('chịu');
        }
        
    }

    public function yourorders(){
        $user_id = Auth::user()->id;
        // $user_id = Auth::user()->id;
        $booking = Booking::where('user_id',$user_id)->with('bookingRooms', 'bookingInfos')->get();
        // dd($booking);
        return view('account.yourorder', compact('booking'));
    }
}

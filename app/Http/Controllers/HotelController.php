<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelRate;
use App\Models\Role;
use App\Models\Room;
use App\Models\Coupon;
use App\Models\Image;
use App\Models\BookingRoom;
use App\Models\Favorite;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB, Session, Auth;


class HotelController extends Controller
{
    protected $favorite;
    public function __construct(){
        $this->favorite = new Favorite();
    }
    
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
    public function show(Request $request, $id)
    {
        $id = $id ?? $request->input('idhotel');
        $startDate = $request->input('startDate');
        if (empty($startDate)) {
            $startDate = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        }
        $endDate = $request->input('endDate');
        if (empty($endDate)) {
            $endDate = Carbon::now('Asia/Ho_Chi_Minh')->addDay()->toDateString();
        }
        $days = floor((strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24));

        // Room thuộc hotel này có booking overlap nhưng vẫn còn slot trống
        $available = BookingRoom::join('rooms', 'rooms.id', '=', 'booking_rooms.room_id')
            ->where('rooms.hotel_id', $id)
            ->select('room_id', 'qty', DB::raw('sum(qty_total) as total_qty'), DB::raw('(qty - sum(qty_total)) as new_qty'))
            ->where(function ($q) use ($startDate, $endDate) {
                $q->where('startDate', '<', $endDate)
                  ->where('endDate', '>', $startDate);
            })
            ->groupBy('room_id', 'qty')
            ->havingRaw('sum(qty_total) < qty')
            ->get()
            ->toArray();
        $room_id = array_column($available, 'room_id');

        $rooms = Room::with('roomType', 'bookingRooms', 'images')
            ->where('hotel_id', $id)
            ->where(function ($q) use ($startDate, $endDate, $room_id) {
                $q->whereDoesntHave('bookingRooms', function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '<', $endDate)
                       ->where('endDate', '>', $startDate);
                })->orWhereIn('id', $room_id);
            })
            ->get();

        $rooms = $rooms->map(function ($room) use ($available) {
            foreach ($available as $k) {
                if ($room->id == $k['room_id']) {
                    $room->new_qty = $k['new_qty'];
                    break;
                }
            }
            return $room;
        });
        $hotel= Hotel::where('id', '=', $id)->with('city', 'category', 'hotelRates','img_nearloca')->get();
        $codes = Coupon::all();
        $hotelRates = HotelRate::where('hotel_id', '=',$id)->orderBy('created_at','desc')->get();
        $numbers_review = HotelRate::all()->where('hotel_id', '=',$id)->count();
        $rating = HotelRate::all()->where('hotel_id', '=',$id)->sum("rate");

        return view('hotelDetail', compact('id','rooms', 'codes','hotel', 'startDate', 'endDate', 'days','hotelRates','rating','numbers_review'));
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

    public function favorite(Request $request){
        $id_hotels = $this->favorite->getId();
        $hotels = Hotel::whereIn('id', $id_hotels)->get();
        $favoar =  $id_hotels->toArray();
        $favohotel = $hotels->toArray();
        $page = $request->input('page');
        $page = $page ?? 1;
        $favohotel = $this->arrayPaginator($favohotel, $request);
        return view('account.favorite', compact('favohotel', 'favoar','page'));
    }
}

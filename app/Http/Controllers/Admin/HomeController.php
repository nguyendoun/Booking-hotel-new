<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\BookingRoom;
use App\Models\RoomType;
use App\Models\Booking;
use App\Models\HotelRate;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


class HomeController
{
    public function index()
    {
        // $now = now()->subWeeks(5);
        // $weeks = [];
        // foreach(range(1,10) as $index)
        // {
        //     $startOfWeek = $now->copy()->startOfWeek();
        //     $endOfWeek = $now->copy()->endOfWeek();
        //     array_push($weeks, [ $startOfWeek, $endOfWeek ]);
        //     $now->addWeek();
        // }

        // $selectedWeek = [];
        // $weekInput = explode(' - ', request()->input('week'));
        // if(count($weekInput) === 2)
        // {
        //     $period = CarbonPeriod::create($weekInput[0], $weekInput[1]);
        // }
        // else
        // {
        //     $period = CarbonPeriod::create(now()->startOfWeek(), now()->endOfWeek());
        // }
        // $selectedWeek = $period->toArray();

        // $rooms = Room::filters()->with(['hotel', 'roomType', 'bookings' => function($query) use ($weekInput) {
        //         $query->whereBetween('booking_date', count($weekInput) === 2 ? $weekInput : [ now()->startOfWeek(), now()->endOfWeek() ]);
        //     }])
        //     ->take(101)
        //     ->get();

        // $hotels = Hotel::pluck('name', 'id');
        // $roomTypes = RoomType::pluck('type', 'id');

        // if($rooms->count() > 100)
        // {
        //     $rooms = null;
        // }
        $bookings = Booking::where('status',0)->get();
        if(request()->date_from && request()->date_to)
        {
            
            $bookings = Booking::where('status',0)->whereBetween('created_at',[request()->date_from,request()->date_to])->get();
        }
        $booking_count = count($bookings);
        $dtnow =Carbon::now()->format('Y-m-d');
        $comments = HotelRate::where('created_at',$dtnow)->count();
        $rating = HotelRate::avg('rate');
        $rating = round($rating,1);
        $rooms = Room::sum('qty');
        $unavailable_rooms = BookingRoom::where('startDate', '<=', $dtnow)
                                        ->where('endDate', '>=', $dtnow)
                                        ->sum('qty_total');
        $available_rooms = $rooms - $unavailable_rooms;
        
        return view('admin/home', compact('bookings','booking_count','comments','rooms','unavailable_rooms','available_rooms','rating'));
    }
}

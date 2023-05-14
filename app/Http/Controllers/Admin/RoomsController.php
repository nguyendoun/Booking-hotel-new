<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRoomRequest;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Coupon;
use App\Models\RoomType;
use App\Models\BookingRoom;
use DB;
use Gate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class RoomsController extends Controller
{
    public function index(Request $request)
    {
        
        $rooms = Room::with('hotel','roomType','bookingRooms')->get();
        // dd($rooms->toArray());
        // foreach($rooms as $room){
        //     if($room->bookingRooms != null){
        //         dd($room->bookingRooms->toArray());
        //     }
            
        // }
        return view('admin.rooms.index',compact('rooms'));
    }

    public function create()
    { 
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hotels = Hotel::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $room_types = RoomType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.rooms.create', compact('hotels', 'room_types'));
    }

    public function store(StoreRoomRequest $request)
    {
        $room = Room::create($request->all());
        return redirect()->route('admin.rooms.index')->with(['success'=>'create room success']);
    }

    public function edit(Room $room)
    {
        abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hotels = Hotel::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $room_types = RoomType::all()->pluck('type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $room->load('hotel', 'roomType');

        return view('admin.rooms.edit', compact('hotels', 'room_types', 'room'));
    }

    public function update(UpdateRoomRequest $request,$id)
    {
        $room = new Room;
        $arr['price'] = $request->price;
        $arr['room_number'] = $request->room_number;
        $arr['description'] = $request->description;
        $arr['hotel_id'] = $request->hotel_id;
        $arr['roomtype_id'] = $request->roomtype_id;
        $arr['qty'] = $request->qty;
        $arr['discount'] = $request->discount;
        $arr['area'] = $request->area;
        $arr['view'] = $request->view;
        $room::where('id',$id)->update($arr);
        return redirect()->route('admin.rooms.index')->with(['success'=>'update room success']);
    }

    public function show($id)
    {
        abort_if(Gate::denies('room_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $room->load('hotel', 'roomType', 'bookingRooms','images');
        $room = Room::with('hotel', 'roomType', 'bookingRooms','images')->findOrFail($id);
        return view('admin.rooms.show', compact('room'));
    }

    public function destroy(Room $room)
    {
        abort_if(Gate::denies('room_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $room->delete();

        return back()->with(['success'=>'delete booking success']);
    }

    public function massDestroy(MassDestroyRoomRequest $request)
    {
        Room::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function changeStatus(Request $request){
        $room = Room::find($request->id);
        $room->status = $request->status;
        $room->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    }

    public function searchRoom(Request $request)
    {
        $coupons = Coupon::all()->pluck('reduction', 'id');
        $roomTypes = RoomType::all()->pluck('type', 'id');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $query = $request->input('room_type');
        $dtnow = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        

         if ($request->isMethod('POST')) {

            $availableRoom = BookingRoom::join('rooms','rooms.id','=','booking_rooms.room_id')
                            ->select("room_id", "qty",  DB::raw('(sum(qty_total)) as total_qty'))
                            ->where(function ($q) use ($startDate, $endDate) {
                            $q->where('startDate', '<',$endDate)
                            ->Where('endDate', '>', $startDate);})
                            ->groupBy(DB::raw('room_id'), 'qty')
                            ->havingRaw('(sum(qty_total)) < qty')
                            ->pluck('room_id');

            if(isset($query)){
                
                $rooms = Room::with('roomType','bookingRooms', 'images')
                                ->whereDoesntHave('bookingRooms', function ($q) use ($startDate, $endDate) {
                                $q->where('startDate', '<',$endDate)
                                ->Where('endDate', '>', $startDate);})
                                ->orWhereIn('id', $availableRoom)->get();   
                                
                $rooms = $rooms->where('roomtype_id','=',$query);
            }else{   
                $rooms = Room::with('roomType','bookingRooms', 'images')
                                ->whereDoesntHave('bookingRooms', function ($q) use ($startDate, $endDate) {
                                $q->where('startDate', '<',$endDate)
                                ->Where('endDate', '>', $startDate);})
                                ->orWhereIn('id', $availableRoom)->get(); 
            }                     
        } else {
            $rooms = null;
        }
           

        return view('admin.searchrooms.index', compact('rooms','roomTypes','coupons','dtnow'));
    }
}

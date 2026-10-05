<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\BookingRoom;
use App\Models\City;
use App\Models\Hotel;
use App\Models\HotelRate;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Booking;
use App\Models\BookingInfo;
use App\Models\Favorite;
use App\Models\RoomType;
use App\Models\Serviceofhotel;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Session, Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;

class HomeController extends Controller
{
    protected $favorite;
    public function __construct(){
        $this->favorite = new Favorite();
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){       
        $dtnow = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->addDay()->toDateString();
        $cities = City::all()->take(8);
        $rooms = Room::with('hotel','roomType', 'images')->orderBy('price')->take(12)->get();
        return view('index', compact('rooms','cities', 'dtnow', 'dt' ));
    }
    //post
    public function searchhotel(Request $request){
        $namecity = $request->input('city');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        // Nếu typeahead đã đẩy kèm type+id, short-circuit không cần parse text
        $searchType = $request->input('search_type');
        $searchId = $request->input('search_id');
        if ($searchType === 'hotel' && !empty($searchId)) {
            return to_route('hotel.detail', ['id' => $searchId, 'startDate' => $startDate, 'endDate' => $endDate]);
        }

        $varcity = null;
        if ($searchType === 'city' && !empty($searchId)) {
            $varcity = City::find($searchId);
        }
        // Fallback: user gõ tay rồi submit (không click dropdown)
        if (!$varcity) {
            $varcity = City::where('city', 'LIKE' , '%'.$namecity.'%')->first();
        }
        if (!$varcity) {
            $f = strtok($namecity, " ");
            $varcity = City::where('city', 'LIKE' , $f.'%')->first();
        }
        if (!$varcity) {
            $parts = explode(' ', $namecity);
            $f = array_pop($parts);
            $varcity = City::where('city', 'LIKE' , '%'.$f)->first();
        }
        if (!$varcity) {
            $hotel = Hotel::where('name', 'LIKE', '%'.$namecity.'%')->first();
            if (!$hotel) {
                return redirect()->back()
                    ->with('error', "Không tìm thấy địa điểm hoặc khách sạn phù hợp với \"{$namecity}\".")
                    ->withInput();
            }
            return to_route('hotel.detail', ['id' => $hotel->id, 'startDate' => $startDate, 'endDate' => $endDate]);
        }
        $city = $varcity->id;
        $namecity = $varcity->city;
        if($request->hasCookie('cookie_t') == false){ 
            $data =collect([]);
            $data->push($city) ;
            $data = $data->toArray();
            $array_json=json_encode($data);
        }
        else{
            $data = Cookie::get('cookie_t');
            $data=json_decode($data); //mảng
            $cityy = collect($city);
            $cityy = $cityy ->toArray();
            if(in_array($city, $data)){
                $data = array_diff($data, $cityy); //xóa $city đã tồn tại trong $data
                $data = array_unique(array_merge($data, $cityy)); //thêm lại $city vào data => thay đổi vị trí (giữ data mới xóa cũ)
            }else{
                $data = array_merge($data, $cityy);
            };
            $array_json=json_encode($data);
            
        }
        Cookie::queue('cookie_t', $array_json, 120);
        $request->session()->forget('stars'); 
        $request->session()->forget('types'); 
        return redirect()->route('searchwithcity', [$city, 'startDate'=>$startDate, 'endDate'=> $endDate, 'namecity'=>$namecity]);
    }

    public function searchhotelbycheckbox($city, Request $request){
        $request->session()->forget('stars');
        $request->session()->forget('types'); 
        $request->session()->forget('rateht'); 
        $stars = [];
        $stars = $request->input('stars');
        if($stars !== null){
            $request->session()->put('stars', $stars);
        }
        $types = [];
        $types = $request->input('types');
        if($types !== null){
            $request->session()->put('types', $types);
        }
        $rateht = [];
        $rateht = $request->input('rateht');
        if($rateht !== null){
            $request->session()->put('rateht', $rateht);
        }
        $namecity = City::where('id', $city)->pluck('city');
        $namecity = $namecity[0];         
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');  
        $condition = $request->input('condition');
        $price = $request->input('price');
        $orderBy =  $request->input('orderBy');
        $page = $request->input('page');
        
        return redirect()->route('searchwithcity', [$city, 'startDate'=>$startDate, 'endDate'=> $endDate, 'namecity'=>$namecity,
        'condition'=> $condition, 'price'=> $price, 'orderBy'=>$orderBy, 'page'=> $page ]);
    }

    public function deletefilter($city, Request $request){
        $namecity = City::where('id', $city)->pluck('city');
        $namecity = $namecity[0];         
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');  
        
        $request->session()->forget('stars'); 
        $request->session()->forget('types'); 
        return redirect()->route('searchwithcity', [$city, 'startDate'=>$startDate, 'endDate'=> $endDate, 'namecity'=>$namecity]);
    }
    //get
    public function searchwithcity(Request $request, $city){
        $page = $request->input('page');
        $page = $page ?? 1;
        
        $namecity = $namecity ?? City::where('id', $city)->first();
        $namecity = $namecity->city;
       
        $orderBy =  $request->input('orderBy');
        $orderBy = $orderBy ?? 'DEFAULT';
        if($orderBy == 'STARDEFAULT' || $orderBy == 'DEFAULT' || $orderBy == 'RATEDEFAULT'){
            $orderBy = 'DESC';
        }
        $condition = $request->input('condition');
        $price = $request->input('price');
        $price = $price ?? 0;
        $startDate = $request->input('startDate');
        if(empty($startDate)){
            $startDate =  Carbon::now('Asia/Ho_Chi_Minh');
            $startDate =  $startDate->toDateString();
        }
        $endDate = $request->input('endDate');
        if(empty($endDate)){
            $endDate = Carbon::now('Asia/Ho_Chi_Minh')->addDay();
            $endDate =$endDate->toDateString();
        }
        
        if (isset($price)) {
            switch ($price) {
                case '0':
                    $price_min = 0;
                    $price_max = 100000000;
                    break;
                case '1':
                    $price_min = 0;
                    $price_max = 500000;
                    break;
                case '2':
                    $price_min = 500000;
                    $price_max = 1000000;
                    break;
                case '3':
                    $price_min = 1000000;
                    $price_max = 3000000;
                    break;
                case '4':
                    $price_min = 3000000;
                    $price_max = 5000000;
                    break;
                case '5':
                    $price_min = 5000000;
                    $price_max = 7000000;
                    break;
                case '6':
                    $price_min = 7000000;
                    $price_max = 10000000;
                    break;
                case '7':
                    $price_min = 10000000;
                    $price_max = 100000000;
                    break;   
            }
        }
        else{
            $price_min = 0;
            $price_max = 100000000;
        }
        // Room có booking overlap nhưng vẫn còn slot trống (sum(qty_total) < qty)
        $availableRoom = BookingRoom::join('rooms', 'rooms.id', '=', 'booking_rooms.room_id')
            ->select('room_id', 'qty', DB::raw('sum(qty_total) as total_qty'))
            ->where(function ($q) use ($startDate, $endDate) {
                $q->where('startDate', '<', $endDate)
                  ->where('endDate', '>', $startDate);
            })
            ->groupBy('room_id', 'qty')
            ->havingRaw('sum(qty_total) < qty')
            ->pluck('room_id');

        $roomsQuery = Room::with('roomType', 'bookingRooms')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('cities', 'cities.id', '=', 'hotels.city_id')
            ->where(function ($q) use ($startDate, $endDate, $availableRoom) {
                $q->whereDoesntHave('bookingRooms', function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '<', $endDate)
                       ->where('endDate', '>', $startDate);
                })->orWhereIn('rooms.id', $availableRoom);
            })
            ->whereBetween('price', [$price_min, $price_max]);

        if (isset($condition) && $condition !== "rate") {
            $roomsQuery->orderBy($condition, $orderBy);
        }
        $rooms = $roomsQuery->get();
        $rooms = $rooms->whereIn('city_id', $city);
        if($rooms->count() !== 0){
            foreach($rooms as $room){
                $d[] = showRate($room->hotel_id);
            }
            $addrate =$rooms->map(function ($post, $key) use($rooms, $d){ 
                foreach($rooms as $k => $value){
                        $post['sum_rate'] = $d[$key];
                        if($d[$key] >= 9){
                            $post['stt_rate'] = 1;
                        }elseif($d[$key] >= 8 && $d[$key] < 9){
                            $post['stt_rate'] = 2;
                        }elseif($d[$key] >= 7 && $d[$key] < 8){
                            $post['stt_rate'] = 3;
                        }else{
                            $post['stt_rate'] = 4;
                        }
                        return $post;
                }
            });
        }
        
        if(isset($condition) && $condition == "rate"){
           $rooms = $rooms->sortByDesc('sum_rate');
        }
        $rooms = $this->filterstars($rooms);
        $rooms = $this->filtertypes($rooms);
        $rooms = $this->filterrateht($rooms);
        $rooms = $rooms->groupBy('hotel_id');
        $hotels = $rooms->toArray();
        $sohotels = count($hotels);
        $hotels = $this->arrayPaginator($hotels, $request);
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $codes = Coupon::all();
        $categories= Category::all();
        $favohotel = null;
        if(Auth::check()){
            $favohotel =  $this->favorite->getId();
            $favohotel = $favohotel->toArray();
        }
        
        return view('searchhotel', compact('favohotel','hotels','city', 'namecity', 'startDate', 'endDate', 'days', 'sohotels', 'codes','categories', 'page'));
    }
    public function booking(Request $request){
        $roomid = $request->input('roomid');
        $hotelid = $request->input('hotelid');
        $qty = $request->input('qty');
        if($qty == 0){
            return redirect()->back();
        }
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $code = $request->input('code');
        $hotel = Hotel::where('id', $hotelid)->with('city', 'category')->get();
        $rooms = Room::where('id', $roomid)->with('roomType', 'images')->get();

        // Tính subtotal & reduction từ DB (không trust client) — same formula as hotelDetail.blade.php
        $room = $rooms->first();
        $discount = $room->discount ?? 0;
        $subtotal = $room->price
            - ($room->price * $discount) / 100
            - ((($room->price * $discount) / 100) * 4) / 100;
        $coupon = !empty($code) ? Coupon::where('code', $code)->first() : null;
        $reduction = $coupon ? $coupon->reduction : 0;
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $name = Auth::user()->name;
            $phone = Auth::user()->phone;
            $email = Auth::user()->email;
            //  dd($user_id);
            $sessions = Session::put("bookings", [['roomid' =>  $roomid, 'qty' => $qty,'startDate' => $startDate,'endDate' => $endDate, 'subtotal'=> $subtotal]]);
            $bookings = $request->session()->pull('bookings');
            
            return view('bookinginfor', compact('hotel','rooms', 'bookings','name', 'phone', 'email','code','reduction', 'days'));
        }
        else{
            $user_id ='null';
            $sessions = Session::put("bookings", [['roomid' =>  $roomid, 'qty' => $qty,'startDate' => $startDate,'endDate' => $endDate, 'subtotal'=> $subtotal]]);
            $bookings = $request->session()->pull('bookings');
            return view('bookinginfor', compact('hotel','rooms','bookings','code', 'days','reduction'));
        }
       
    }
    public function thanhtoan(Request $request){
        $request->validate([
            'roomid'    => 'required|exists:rooms,id',
            'qty'       => 'required|integer|min:1',
            'startDate' => 'required|date',
            'endDate'   => 'required|date|after:startDate',
        ]);

        $roomid = $request->input('roomid');
        $qty = (int) $request->input('qty');
        $startDate = date("Y-m-d", strtotime($request->input('startDate')));
        $endDate = date("Y-m-d", strtotime($request->input('endDate')));
        $days = floor((strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24));

        $code = $request->input('code');
        $coupon = !empty($code) ? Coupon::where('code', $code)->first() : null;
        $reduction = $coupon ? $coupon->reduction : 0;
        $coupon_id = $coupon ? $coupon->id : null;

        $note = $request->input('note') ?? 'null';

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $checkname = "HN";
        } else {
            $user_id = null;
            $checkname = "NN";
        }

        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');

        try {
            $result = DB::transaction(function () use (
                $roomid, $qty, $startDate, $endDate, $days, $reduction, $coupon_id,
                $user_id, $checkname, $name, $phone, $email, $note
            ) {
                // Lock room row → các request đặt cùng phòng phải xếp hàng
                $room = Room::where('id', $roomid)->lockForUpdate()->firstOrFail();

                $bookedQty = (int) BookingRoom::where('room_id', $roomid)
                    ->where(function ($q) use ($startDate, $endDate) {
                        $q->where('startDate', '<', $endDate)
                          ->where('endDate', '>', $startDate);
                    })
                    ->sum('qty_total');
                $available = $room->qty - $bookedQty;
                if ($qty > $available) {
                    throw new \RuntimeException("Chỉ còn {$available} phòng cho khoảng thời gian này.");
                }

                // Tính subtotal từ DB (không trust client) — same formula as hotelDetail.blade.php
                $discount = $room->discount ?? 0;
                $subtotal = $room->price
                    - ($room->price * $discount) / 100
                    - ((($room->price * $discount) / 100) * 4) / 100;
                $totalqty = $subtotal * $qty * $days;
                $total = $totalqty - ($totalqty * $reduction / 100);

                $booking = Booking::create([
                    'user_id'   => $user_id,
                    'coupon_id' => $coupon_id,
                ]);
                $booking_id = $booking->id;

                $time = str_replace("-", "", Carbon::now('Asia/Ho_Chi_Minh')->toDateString());
                $order_code = $booking_id . $checkname . $time . $qty . $roomid;

                $booking_room = new BookingRoom();
                $booking_room->booking_id = $booking_id;
                $booking_room->qty_total = $qty;
                $booking_room->room_id = $roomid;
                $booking_room->order_code = $order_code;
                $booking_room->subtotal = $subtotal;
                $booking_room->startDate = $startDate;
                $booking_room->endDate = $endDate;
                $booking_room->num_days = $days;
                $booking_room->reduction = $reduction;
                $booking_room->total = $total;
                $booking_room->note = $note;
                $booking_room->save();

                $booking_info = new BookingInfo();
                $booking_info->booking_id = $booking_id;
                $booking_info->name = $name;
                $booking_info->phone = $phone;
                $booking_info->email = $email;
                $booking_info->save();

                return compact('subtotal', 'total', 'order_code');
            });
        } catch (\RuntimeException $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }

        $rooms = Room::where('id', $roomid)->with('hotel', 'roomType', 'images')->get();
        $subtotal = $result['subtotal'];
        $total = $result['total'];
        $order_code = $result['order_code'];

        return view('bill', compact('rooms', 'startDate', 'endDate', 'qty', 'days', 'subtotal', 'total', 'reduction', 'order_code'));
    }


    public function filterstars($rooms){
        $stars = session()->get('stars');
        if($stars !== null ){
            $rooms = $rooms->whereIn('star', $stars);
        }
        return $rooms;
    }
    public function filtertypes($rooms){
        $types = session()->get('types');
        if($types !== null){
            $rooms = $rooms->whereIn('category_id', $types);
        }
        return $rooms;
    }
    public function filterrateht($rooms){
        $rateht = session()->get('rateht');
        if($rateht !== null){
            $rooms = $rooms->whereIn('stt_rate', $rateht);
        }
        return $rooms;
    }

    public function addfavorite($hotel_id){
        $user_id = Auth::user()->id;
        $favo = Favorite::where('user_id', $user_id)->where('hotel_id', $hotel_id)->first();
        if($favo !== null){
            $favod = Favorite::where('user_id', $user_id)->where('hotel_id', $hotel_id);
            $favod->delete();
        }else{
            $favo = new Favorite();
            $favo->hotel_id = $hotel_id;
            $favo->user_id = $user_id;
            $favo->save();
        }
        return redirect()->back()->with(['mess'=> "đã thêm vào danh sach yêu thích"]);
    }

    public function dele(){
        // Cookie::queue( Cookie::forget('cookie_t')); không hoạt động nên chuyển qua dùng dòng bên dưới
        setcookie('cookie_t', 'Expired', time() - 1000000000, '/');
    }
}
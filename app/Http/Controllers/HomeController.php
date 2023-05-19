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
        $varcity = City::where('city', 'LIKE' , '%'.$namecity.'%')->first();
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        if(empty($varcity->id)){
            $f = strtok($namecity, " ");
            $varcity = City::where('city', 'LIKE' , $f.'%')->first();
            if(empty($varcity->id)){
                $f = explode(' ', $namecity);
                $f = array_pop($f);
                $varcity = City::where('city', 'LIKE' ,'%'.$f)->first();
                if(empty($varcity->id)){
                    return redirect()->back()->with(['mess'=> 'khônng tìm thấy kết quả nào tương tự']);
                    }
                }
            $city= $varcity->id;
            $namecity = $varcity->city;
        }else{
            $city= $varcity->id;
            $namecity = $varcity->city;
        }
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
        if (isset($condition) && $condition !== "rate") {
            $rooms = Room::with('roomType','bookingRooms')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('cities', 'cities.id', '=', 'hotels.city_id')
            ->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>', $endDate)
                       ->orWhere('endDate', '<', $startDate);
                });
            })->orWhereDoesntHave('bookingRooms')
            ->orderBy($condition, $orderBy)->whereBetween('price', [$price_min, $price_max])
            ->get();
        } else{
            $rooms = Room::with('roomType','bookingRooms')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('cities', 'cities.id', '=', 'hotels.city_id')
            ->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>', $endDate)
                       ->orWhere('endDate', '<', $startDate);
                });
            })->orWhereDoesntHave('bookingRooms')->whereBetween('price', [$price_min, $price_max])->get();
        }
        $rooms = $rooms->whereIn('city_id', $city);
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
        $roomid = $request -> input('roomid');
        $hotelid = $request -> input('hotelid');
        $qty = $request-> input('qty');
        if($qty == 0){
            return redirect()->back(); 
        }
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $code = $request->input('code');
        $reduction = $request -> input('reduction');
        $subtotal = $request -> input('subtotal');
        $hotel= Hotel::where('id', '=', $hotelid)->with('city', 'category')->get();
        $rooms = Room::where('id', '=',$roomid )->with('roomType', 'images')->get();
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
        
        $roomid = $request -> input('roomid');
        $qty = $request-> input('qty');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

         $startDate = date("Y-m-d", strtotime($startDate));
        
         $endDate = date("Y-m-d", strtotime($endDate));

        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $code = $request->input('code');
        $reduction = Coupon::where('code', 'like' , $code)->pluck('reduction')->first();
        $note = $request->input('note');
        $subtotal = $request->input('subtotal');
        $totalqty =  $subtotal * $qty*$days;
        

        $id = Coupon::where('code', 'like' , $code)->first()->id;
        $rooms = Room::where('id', '=',$roomid )->with('hotel','roomType', 'images')->get();
        $total = $totalqty - ($totalqty*$reduction/100);
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');
            DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id )");
            $booking_id = Booking::where('user_id', '=' , $user_id)->orderBy('id', 'DESC')->pluck('id')->first();
            $checkname="HN";
        }
        else{
            $user_id ='null';
            DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id)");
            $booking_id = Booking::orderBy('id', 'DESC')->pluck('id')->first();
            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $checkname="NN";
           
        }
        if(isset($note)){
            $note = $note;
        }else{
            $note = 'null';
        }
        $time =Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $time = str_replace("-","",$time);
        $order_code= $booking_id.$checkname.$time.$qty.$roomid;

        $booking_room = new BookingRoom();
        $booking_room->booking_id = $booking_id;
        $booking_room->qty_total = $qty;
        $booking_room->room_id = $roomid;
        $booking_room->order_code = $order_code;
        $booking_room->subtotal= $subtotal;
        $booking_room->startDate= $request->startDate;
        $booking_room->endDate= $request->endDate;
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
        return view('bill', compact('rooms','startDate', 'endDate', 'qty','days','subtotal','total', 'reduction','order_code'));
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
        // dd($hotel_id);
        $user_id = Auth::user()->id;
        if(Favorite::where('user_id', '=', $user_id)->exists() && Favorite::where('hotel_id', '=', $hotel_id)->exists()){
            $favod = Favorite::where('user_id', '=', $user_id)->where('hotel_id', '=', $hotel_id);
            // dd($favod);
            $favod->delete();
        }else{
            $favo = new Favorite();
        $favo->hotel_id = $hotel_id;
        $favo->user_id = $user_id;
        $favo->save();
        }
        

        return redirect()->back()->with(['mess'=> "đã thêm vào danh sach yêu thích"]);
    }
    

    
}
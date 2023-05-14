<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Models\BookingInfo;
use App\Models\BookingRoom;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBookingRequest;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Room;
use App\Models\Coupon;
use Gate;
use Mail;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BookingsController extends Controller
{
    public function index(Request $request)
    {
    
        $bookings= Booking::with('user','coupon')->get();
        return view('admin.bookings.index',compact('bookings'));
    }

    public function create()
    {
        abort_if(Gate::denies('booking_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupons = Coupon::all()->pluck('reduction', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.bookings.create', compact('coupons'));
    }

    public function store(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $subtotal = $request->qty  * $request->price;
        $total = $subtotal * $days;
        $booking = new Booking();       
        $booking->status = "1";
        $booking->coupon_id = $request->coupon_id;
        $booking->payment_status = $request->payment_status;	
        $booking->save();
        $booking_room = new BookingRoom();
        $booking_room->booking_id= $booking->id;
        $booking_room->room_id = $request->room_id;
        $booking_room->startDate = $startDate ;
        $booking_room->endDate = $endDate;
        $booking_room->num_days = $days;
        $booking_room->note = $request->note;
        $booking_room->qty_total = $request->qty;
        $booking_room->subtotal = $subtotal;
        $booking_room->total = $total;
        $booking_room->save();
        $booking_info = new BookingInfo();
        $booking_info->name = $request->name;
        $booking_info->email = $request->email;
        $booking_info->phone = $request->phone;
        $booking_info->address = $request->address;
        $booking_info->booking_id = $booking->id;
        $booking_info->save();

        $booking->total_money = $total;
        $booking->save();

        return redirect()->back()->with(['messages'=>'create booking success']);
    }

    public function edit(Booking $booking)
    {
        abort_if(Gate::denies('booking_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupons = Coupon::all()->pluck('reduction', 'id')->prepend(trans('global.pleaseSelect'), '');

        $booking->load('coupon');

        return view('admin.bookings.edit', compact('coupons', 'booking'));
    }

    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->all());

        return redirect()->route('admin.bookings.index');
    }

    public function show($id)
    {
        abort_if(Gate::denies('booking_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $booking = Booking::with('bookingRooms','bookingInfo')->findOrFail($id);

        return view('admin.bookings.show', compact('booking'));
    }

    public function destroy(Booking $booking)
    {
        abort_if(Gate::denies('booking_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $booking->delete();

        return back()->with(['messages'=>'delete booking success']);
    }

    public function massDestroy(MassDestroyBookingRequest $request)
    {
        Booking::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    
    public function bookingStatus(Request $request,$id)
    {
        $booking=Booking::find($id);
        if($request->status == "1")
        {
            if($booking->status =="1")
            {
                return redirect()->back()->with('error','confirmed');
            }
            $booking->status = "1";
            $booking->update();
            $data = [
                'booking' => $booking,
            ];
            Mail::send('admin.mails.sendmail',$data,function($message){
                $message->from('caohien0503@gmai.com','Hotel Đà Nẵng');
                $message->to('thuhien14102000@gmail.com','Hiền');
                $message->subject('Đặt phòng thành công');
            });
            return redirect()->back()->with('status','Comfirmed success');
        }elseif($request->status == "2")
        {
            if($booking->payment_status == "0")
            {
                $booking->status = "2";
                $booking->update();
                return redirect()->back()->with('error','Payment confirmation');
            }
            else
            {
                if($booking->status == "1")
                {
                $booking->status = "2";
                $booking->update();
                return redirect()->back()->with('status','Completed success');
                }
                else
                {
                    return redirect()->back()->with('error','unconfimred ! cannot be completed');
                }
            }
            
        }elseif($request->status =="3")
        {          
            $booking->status = "3";
            $booking->update();
            return redirect()->back()->with('error','Please enter the why to cancel booking');
        }
    }

    public function cancelBooking(Request $request,$id)
    {
        $booking = Booking::find($id);
        $booking->cancel_reason = $request->cancel;
        $booking->update();
        $data = [
            'booking' => $booking,
        ];
        Mail::send('admin.mails.cancelmail',$data,function($message){
            $message->from('caohien0503@gmai.com','Hotel Đà Nẵng');
            $message->to('thuhien14102000@gmail.com','Hiền');
            $message->subject('Hủy đặt phòng');
        });
        return redirect()->back()->with('status','Cancel success');
    }

    public function completeBooking(Request $request,$id)
    {
        $booking = Booking::find($id); 
        if($booking->payment_status=="0")
        {
            $booking->payment_status = $request->input('cash_received') == TRUE ? '1' : '0';
        }
        $booking->update();
        return redirect()->back()->with('status','Booking room này đã hoàn thành');


    }

   

}

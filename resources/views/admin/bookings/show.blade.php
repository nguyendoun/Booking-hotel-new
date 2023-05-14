@extends('layouts.admin')
@section('content')

<div class="modal fade" id="CompleteOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Complete Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if($booking->status == "2")
            <form  action="{{route('admin.complete.booking',$booking->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    @if($booking->payment_status == "0" )
                        <h6>
                            <input type="checkbox" name="cash_received" required>Thanh toán khi check-in hotel
                        </h6>
                        <p>Nhấn đồng ý khi bạn đã nhận được tiền từ khách hàng</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
            @endif
        </div>
    </div>
</div> 
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif 
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif 

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#status" role="tab" data-toggle="tab" aria-controls="status" aria-selected="true">
                Status Booking
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#info_customer" role="tab" data-toggle="tab" aria-controls="info_customer" aria-selected="false">
                Info Customer
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#info_rooms" role="tab" data-toggle="tab" aria-controls="info_rooms" aria-selected="false">
                Info Rooms
            </a>
        </li>
        
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade" role="tabpanel" id="info_customer" aria-labelledby="info_customer-tab">
            <h2>Thông tin khách hàng</h2>
            <table class="table table-bordered table-striped">
                @if($booking->user_id != null)
                    <tbody>
                        <tr>
                            <th>
                                Customer Name
                            </th>                         
                            <td>
                                {{ $booking->user->name }}
                            </td>                            
                        </tr>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                {{ $booking->user->email}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Phone
                            </th>
                            <td>
                            {{ $booking->user->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Address
                            </th>
                            <td>
                                {{ $booking->user->address }}
                            </td>
                        </tr>                   
                    </tbody>
                @else
                <tbody>
                        <tr>
                            <th>
                                Customer Name
                            </th>                         
                            <td>
                                {{ $booking->bookingInfo->name }}
                            </td>                            
                        </tr>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                {{ $booking->bookingInfo->email}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Phone
                            </th>
                            <td>
                            {{ $booking->bookingInfo->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Address
                            </th>
                            <td>
                                {{ $booking->bookingInfo->address }}
                            </td>
                        </tr>                   
                </tbody>
                @endif              
            </table>
        </div>
        <div class="tab-pane fade" role="tabpanel" id="info_rooms" aria-labelledby="info_rooms-tab">
            <h2>Thông tin phòng</h2>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Room Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Num Day</th>
                    <th>Quantity</th>
                    <th>SubTotal</th>
                    <th>Reduction</th>
                    <th>Total</th>
                    <th>Note</th>
                </tr>
                @foreach($booking->bookingRooms as $bookingroom)
                <tr>
                    <td>{{$bookingroom->room->roomType->type }}</td>
                    <td>{{$bookingroom->startDate}}</td>
                    <td>{{$bookingroom->endDate}}</td>
                    <td>{{$bookingroom->num_days}}</td>
                    <td>{{$bookingroom->qty_total}}</td>
                    <td>{{$bookingroom->subtotal}}</td>
                    <td>{{$bookingroom->reduction}}</td>
                    <td>{{number_format(($bookingroom->qty_total)*($bookingroom->room->price)*($bookingroom->num_days))}}đ</td>
                    <td>{{$bookingroom->note}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="tab-pane fade show active" role="tabpanel" id="status" aria-labelledby="status-tab">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm border">
                        <h6 class="card-header">Booking Status</h6>
                        <div class="card-body">
                            <p>
                            @if($booking->status == '0')
                                <span class="badge badge-secondary"> Pending</span>
                            @elseif($booking->status == '1')
                                <span class="badge badge-primary">Confirmed</span>
                            @elseif($booking->status == '2' )
                                @if($booking->payment_status=="0")
                                    Payment confirmation !!!                                   
                                @else
                                    <span class="badge badge-success">Completed</span>
                                @endif
                            @else
                                @if( $booking->cancel_reason != NULL)
                                    <span class="badge badge-danger">Cancelled</span>
                                    <br>
                                    Because: {{$booking->cancel_reason}}
                                @else
                                    Please enter the cancellation
                                @endif
                            @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border">
                        <h6 class="card-header">Payment Status</h6>
                        <div class="card-body">
                            <p>
                                @if($booking->payment_status == '0')
                                    <span class="badge badge-light">Waiting for payment</span>
                                @elseif($booking->payment_status == '1')
                                    <span class="badge badge-warning">Paid</span>
                                @elseif($booking->payment_status == '2')
                                    <span class="badge badge-info">Online payment</span>
                                @else
                                    Nothing
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5>Booking Status Update</h5>
                            <hr>
                            @if($booking->status == "2")
                                Request to complete booking
                            @elseif($booking->status =="3")
                                Request to cancel booking
                            @else 
                                <form  action="{{route('admin.update.status',$booking->id)}}" method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="input-group mb-3">
                                        <select name="status" class="custom-select status" required id="inputGroupSelect02">
                                            <option value="">--Status--</option>
                                            <option value="1" {{ $booking->status == "1" ? 'selected':''}}>Confirmed</option>
                                            <!-- <option value="Khách đã nhận phòng" {{ $booking->booking_msg == "Khách đã nhận phòng" ? 'selected':''}}>Operational</option> -->
                                            <option value="2" {{ $booking->status == "2" ? 'selected':''}}>Completed</option>
                                            </option>
                                            <option value="3" {{ $booking->status == "3" ? 'selected':''}}>Cancel</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text bg-info text-white" for="inputGroup">Update</button>
                                        </div>
                                    </div>
                                </form>         
                            @endif
                        </div>
                    </div>

                </div>
                @if($booking->status == "3")
                    <div class="col-md-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5>Cancelled Booking</h5>                    
                                <form  action="{{route('admin.cancel.booking',$booking->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="cancel"  value="{{ old('cancel', '') }}" required placeholder="nhập lý do hủy">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-danger" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </form>         
                            </div>
                        </div>
                    </div> 
                                
                @endif

                @if($booking->status=="2")
                    @if($booking->payment_status == "0")
                        <div class="col-md-6">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5>Complete Booking</h5>
                                    <hr>                            
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#CompleteOrderModal"
                                    class="badge badge-pill badge-primary px-3 py-2">
                                        Payment confirmation
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
           
        </div>
    <div class="form-group">
        <a class="btn btn-default" href="{{ route('admin.bookings.index') }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>
</div>
@endsection
@section('scripts')

@endsection

@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        Search Room
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('admin.searchRoom')}}">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Start Date</label>
                        <input class="form-control" type="date" min="{{$dtnow}}" name="startDate" id="start_time" value="{{ request()->input('startDate') }}" placeholder="start date" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>End Date</label>
                        <input class="form-control" type="date" min="{{$dtnow}}" name="endDate" id="end_time" value="{{ request()->input('endDate') }}" placeholder="end date" required>
                    </div>
                </div>
                
                <div class="col-md-1">
                     <div class="form-group">
                        <label>&nbsp;</label>
                        <input type="submit" class="btn btn-success" value="Search">
                        </input>
                    </div>
                </div>
            
        </form>
                <div class="col-md-3">
                    <label>Choose room type</label>
                    <form  method="POST" action="{{route('admin.searchRoom')}}" id="searchbytype">
                        @csrf            
                        <input class="form-control" hidden type="date" name="startDate" id="start_time" value="{{ request()->input('startDate') }}" placeholder="start date" required>

                        <input class="form-control" hidden type="date" name="endDate" id="end_time" value="{{ request()->input('endDate') }}" placeholder="end date" required>

                        <select class="custom-select mb-2 mr-sm-2 bytype" id="room_type" name="room_type">
                            <option value="">All room type</option>
                            @foreach($roomTypes as $id=>$type)
                                <option value="{{ $id }}" {{ request()->input('room_type') == $id ? 'selected' : '' }}>{{ $type }}</option>
                            @endforeach
                        </select>

                    </form>
                 </div>
                </div>
            <div>
        @if($rooms !== null)
            @if($rooms->count())
                <div class="table-responsive">
                    <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Room Type
                                </th>
                                <th>
                                    Price
                                </th>
                                
                                <th>
                                    Quantity
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)

                                <tr>
                                    <td>
                                        {{ $room->id}}
                                    </td>
                                    <td class="room-name">
                                        {{ $room->roomType->type }}
                                    </td>
                                    <td>
                                        {{ number_format($room->price)}}đ
                                    </td>
                                    <td>
                                        {{$room->qty}}
                                        
                                       
                                    </td>
                                  
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bookRoom{{$room->id}}" data-room-id="{{ $room->id }}">
                                            Book Room
                                        </button>
                                    </td>

                                </tr>
                                <div class="modal" tabindex="-1" role="dialog" id="bookRoom{{$room->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <form action="{{ route("admin.bookings.store") }}" method="POST" id="bookingForm">
                                        @csrf
                                        <div class="modal-header">
                                                <h5 class="modal-title">Booking of a room</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                    
                                                    <input type="hidden" name="room_id" id="room_id" value="{{$room->id}}">
                                                    <input type="hidden" name="start_date" value="{{ request()->input('startDate') }}">
                                                    <input type="hidden" name="end_date" value="{{ request()->input('endDate') }}">
                                                    <input type="hidden" name="price" value="{{ $room->price }}">
                                                  
                                                    <div class="form-group">
                                                        <label class="required" for="name">Name Customer<i style="color:red">*</i></label>
                                                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email<i style="color:red">*</i></label>
                                                        <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone<i style="color:red">*</i></label>
                                                        <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') }}" required> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input class="form-control date" type="text" name="address" id="address" value="{{ old('address') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Note</label>
                                                        <textarea class="form-control" type="text" name="note" id="note" value="{{ old('note') }}"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Quantity room<i style="color:red">*</i></label>
                                                        <select class="form-control" name="qty" id="qty">
                                                            @for($i = 1;$i <= $room->qty; $i++) 
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        <!-- <input class="form-control" name="qty" id="qty" min="1" max="{{$room->qty}}" value="{{ old('qty') }}"> -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="coupon_id">Coupon</label>
                                                        <select class="form-control" name="coupon_id" id="coupon_id">
                                                            <option value="">No coupon</option>
                                                            @foreach($coupons as $id => $coupon)
                                                                
                                                                <option value="{{ $id }}" {{ ( old('coupon_id')) == $id ? 'selected' : '' }}>{{ $coupon }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('coupon_id'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->first('coupon_id') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="coupon_id">Payment<i style="color:red">*</i></label>
                                                        <select name="payment_status" class="custom-select" required id="inputGroupSelect02">
                                                            
                                                            <option value="0">UnPaid</option>
                                                            <option value="1">Paid</option>
                                                            <option value="2">Paid Online</option>
                                                        </select>
                                                    </div>
                                                    <!-- <button type="submit" class="btn btn-primary">Đặt</button> -->
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary" id="submitBooking">Submit</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center">There are no rooms available at the time you have chosen</p>
            @endif
        @endif
    </div>
</div>
<div class="modal fade" id="booking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Create booking success!!!
                    -> <a href="{{route('admin.bookings.index')}}">Go to the booking page</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript">
        @if(session()->has('messages'))
            $('#booking').modal('show');
        @endif
    </script>
    <script type="text/javascript">
        $(function(){
            $('.bytype').change(function(){
                $("#searchbytype").submit();
            })
        })
    </script>
@stop
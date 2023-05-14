@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bookings.update", [$booking->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="user_id">Customer Name <i style="color:red"> *</i></label>
                <input class="form-control" type="text" name="user_id" id="user_id" value="{{ old('user_id', $booking->user->name) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="qty_room">Qty Room <i style="color:red"> *</i></label>
                <input class="form-control" type="number" name="qty_room" id="qty_room" value="{{ old('qty_room', $booking->qty_room) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="total_money">Total Money<i style="color:red"> *</i></label>
                <input class="form-control" type="number" name="total_money" id="total_money" value="{{ old('total_money', $booking->total_money) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="coupon_id">Coupon</label>
                <select class="form-control" name="coupon_id" id="coupon_id">
                    @foreach($coupons as $id => $coupon)
                        <option value="{{ $id }}" {{ ($booking->coupon ? $booking->coupon->id : old('coupon_id')) == $id ? 'selected' : '' }}>{{ $coupon }}</option>
                    @endforeach
                </select>
                @if($errors->has('coupon_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_id') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
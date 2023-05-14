@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.booking.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.bookings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.id') }}
                        </th>
                        <td>
                            {{ $booking->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Customer Name
                        </th>
                        <td>
                            {{ $booking->user->name}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.booking.fields.booking_date') }}
                        </th>
                        <td>
                            {{ $booking->booking_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Qty Room
                        </th>
                        <td>
                            {{ $booking->qty_room}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Conpou
                        </th>
                        <td>
                            {{ $booking->coupon->code }}
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.bookings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
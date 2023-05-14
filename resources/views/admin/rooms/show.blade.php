@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.room.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.id') }}
                        </th>
                        <td>
                            {{ $room->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Price
                        </th>
                        <td>
                        {{ number_format($room->price)}}đ
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Room Number
                        </th>
                        <td>
                            {{ $room->room_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Description
                        </th>
                        <td>
                            {{ $room->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Quantity
                        </th>
                        <td>
                            {{ $room->qty }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            DisCount
                        </th>
                        <td>
                            {{ $room->discount}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Area
                        </th>
                        <td>
                            {{ $room->area}} 
                        </td>
                    </tr>
                    <tr>
                        <th>
                            View
                        </th>
                        <td>
                            {{ $room->view}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.room_type') }}
                        </th>
                        <td>
                            {{ $room->roomType->type }}
                        </td>
                    </tr>
                </tbody>
                
            </table>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>
                            Image
                        </th>
                        @foreach ($room->images as $image)
                        <td>
                            <img height="200px" width="200px" src="../../../resources/images/rooms/{{$image->path}}" alt="">
                        </td>
                        @endforeach
                    </tr>
                    
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#room_bookings" role="tab" data-toggle="tab">
                {{ trans('cruds.booking.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="room_bookings">
            <!-- @includeIf('admin.rooms.relationships.roomBookings', ['bookings' => $room->roomBookings]) -->lllll
        </div>
    </div>
</div>

@endsection
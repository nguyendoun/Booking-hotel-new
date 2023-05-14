@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.room.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rooms.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="roomtype_id">{{ trans('cruds.room.fields.room_type') }}<i style="color:red">*</i></label>
                <select class="form-control select2 {{ $errors->has('roomtype_id') ? 'is-invalid' : '' }}" name="roomtype_id" id="roomtype_id" required>
                    @foreach($room_types as $id => $room_type)
                        <option value="{{ $id }}" {{ old('roomtype_id') == $id ? 'selected' : '' }}>{{ $room_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('roomtype_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roomtype_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.room_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">Price<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price', '') }}" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                     {{$errors->first('price')}}
                    </div>
                @endif  
            </div>
            <div class="form-group">
                <label class="required" for="room_number">Room Number<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('room_number') ? 'is-invalid' : '' }}" type="text" name="room_number" id="room_number" value="{{ old('room_number', '') }}" required>
                @if($errors->has('room_number'))
                <div class="invalid-feedback">
                    {{$errors->first('room_number')}}</p>
                </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="description">Description<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{$errors->first('description')}}
                    </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="qty">Quantity<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('qty') ? 'is-invalid' : '' }}" type="text" name="qty" id="qty" value="{{ old('qty', '') }}" required>
                @if($errors->has('qty'))
                    <div class="invalid-feedback">
                        {{$errors->first('qty')}}
                    </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="discount">Discount<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" type="text" name="discount" id="discount" value="{{ old('discount', '') }}" required>
                @if($errors->has('discount'))
                    <div class="invalid-feedback">
                        {{$errors->first('discount')}}
                    </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="area">Area<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('area') ? 'is-invalid' : '' }}" type="text" name="area" id="area" value="{{ old('area', '') }}" required>
                @if($errors->has('area'))
                    <div class="invalid-feedback">
                        {{$errors->first('area')}}
                    </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="view">View</label>
                <input class="form-control {{ $errors->has('view') ? 'is-invalid' : '' }}" type="text" name="view" id="view" value="{{ old('view', '') }}"></input>
                @if($errors->has('view'))
                    <div class="invalid-feedback">
                        {{$errors->first('view')}}
                    </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="hotel_id">{{ trans('cruds.room.fields.hotel') }}<i style="color:red">*</i></label>
                <select class="form-control select2 {{ $errors->has('hotel') ? 'is-invalid' : '' }}" name="hotel_id" id="hotel_id" required>
                    @foreach($hotels as $id => $hotel)
                        <option value="{{ $id }}" {{ old('hotel_id') == $id ? 'selected' : '' }}>{{ $hotel }}</option>
                    @endforeach
                </select>
                @if($errors->has('hotel_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hotel_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.hotel_helper') }}</span>
            </div>
           
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
        <div class="form-group">
            <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>



@endsection
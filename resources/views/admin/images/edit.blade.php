@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.image.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.images.update", [$image->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="path">Image<i style="color:red"> *</i></label>
                <input class="form-control" type="file" name="path" id="path" value="{{ old('path', $image->path) }}" >
                <img src="../../../../resources/images/rooms/{{$image->path}}"" height="100" width="100" alt="ảnh">
            </div>
            <div class="form-group">
                <label class="required" for="room_id">Room Number</label>
                <select class="form-control" name="room_id" id="room_id">
                    @foreach($rooms as $id => $room)
                        <option value="{{ $id }}" {{ ($image->room ? $image->room->id : old('room_id')) == $id ? 'selected' : '' }}>{{ $room }}</option>
                    @endforeach
                </select>
                @if($errors->has('room_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('room_id') }}
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
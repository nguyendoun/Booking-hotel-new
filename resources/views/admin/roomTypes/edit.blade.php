@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.roomType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.room-types.update", [$roomType->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="type">{{ trans('cruds.roomType.fields.name') }}<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="name" value="{{ old('type', $roomType->type) }}" required>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.roomType.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="bed">Quantity Bed<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('bed') ? 'is-invalid' : '' }}" type="text" name="bed" id="bed" value="{{ old('bed', $roomType->bed) }}" required>
                @if($errors->has('bed'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bed') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="capactity">Capactity<i style="color:red">*</i></label>
                <input class="form-control {{ $errors->has('capactity') ? 'is-invalid' : '' }}" type="text" name="capactity" id="capactity" value="{{ old('capactity', $roomType->capactity) }}" required>
                @if($errors->has('capactity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capactity') }}
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
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.coupon.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.coupons.update", [$coupon->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">Code<i style="color:red"> *</i></label>
                <input class="form-control" type="text" name="code" id="code" value="{{ old('code', $coupon->code) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="remain">Remain <i style="color:red"> *</i></label>
                <input class="form-control {{ $errors->has('remain') ? 'is-invalid' : '' }}" type="text" name="remain" id="remain" value="{{ old('remain', $coupon->remain) }}" required>
                @if($errors->has('remain'))
                    <div class="invalid-feedback">
                        {{$errors->first('remain')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="reduction">Reduction<i style="color:red"> *</i></label>
                <input class="form-control" type="text" name="reduction" id="reduction" value="{{ old('reduction', $coupon->reduction) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="startDate">Start Date <i style="color:red"> *</i></label>
                <input class="form-control" type="date" name="startDate" id="startDate" value="{{ old('startDate', $coupon->startDate) }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="endDate">End Date <i style="color:red"> *</i></label>
                <input class="form-control" type="date" name="endDate" id="endDate" value="{{ old('endDate', $coupon->endDate) }}" required>
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
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.coupon.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.coupons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.coupon.fields.id') }}
                        </th>
                        <td>
                            {{ $coupon->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Code
                        </th>
                        <td>
                            {{ $coupon->code}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Remain
                        </th>
                        <td>
                            {{ $coupon->remain }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Reduction
                        </th>
                        <td>
                            {{ $coupon->reduction}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Start Date
                        </th>
                        <td>
                            {{ $coupon->startDate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            End Date
                        </th>
                        <td>
                            {{ $coupon->endDate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Create At
                        </th>
                        <td>
                            {{ $coupon->created_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Update At
                        </th>
                        <td>
                            {{ $coupon->updated_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.coupons.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
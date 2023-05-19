@extends('layouts.orders')

@section('title', 'Đơn hàng')
@section('main')


@if($booking->count() > 0)
  <div>Có</div>
@else
    <div>Đéo có</div>
@endif

@stop
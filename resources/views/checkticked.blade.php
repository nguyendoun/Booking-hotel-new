@extends('layouts.master')

@section('title', "Tra Cứu trình trạng đơn hàng")


@section('content')

<form class="" id="Hotels" action="{{ route('checkorderstt') }}" method="POST">
    @csrf
    <div class="item">
      <i class="fa fa-search"></i>
      <input required class="" type="text" name="order_code" placeholder="Nhập mã đơn hàng"  style="border: none;padding-left: 4px;">
    </div>

    <div class="item">
        <i class="fa fa-search"></i>
        <input required class="" type="text" name="number_phone" placeholder="Nhập sdt"  style="border: none;padding-left: 4px;">
      </div>


    <div class="item">
      <div class="">
        <input class=" " type="submit" value="Kiểm tra">
      </div>
    </div>
  </form>
    

@stop
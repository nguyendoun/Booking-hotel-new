@extends('layouts.master')

@section('title', $namecity)

@section('styles')

    <style>
        p {
            margin: 0;
        }

        .MuiBox-root {
            display: flex;
            font-size: 14px;
            font-weight: 600;
            line-height: 50px;
            border-bottom: solid 1px #babbbc;
            margin-bottom: 16px;
            justify-content: space-between;
        }

        .MuiBox-root-item {
            color: #1A202C;
            cursor: pointer;
            margin-right: 35px;
        }

        .MuiBox-root-item:hover,
        .MuiBox-root-item:active,
        .active,
        .MuiBox-root-item>a:hover {
            color: #f38e11;
            border-bottom: solid 1px #f38e11;
            text-decoration: none;
        }

        .MuiBox-root-item>a {
            padding-bottom: 17px;
        }


        .clearfix:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        .clearfix {
            clear: both;
            display: block;
        }

        header {
            width: 1111px;
            height: 80px;
            margin: 0 auto;
            padding: 0px;
            color: #241a71;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        header nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            z-index: 1001;
        }

        header nav .menu .logo {
            font-size: 16px;
            font-weight: bold;
            margin-right: 50px;
            text-transform: uppercase;
            color: #241a71;
        }

        header nav .menu .logo span {
            color: #f38e11;
        }

        header nav .menu ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        header nav .menu ul>li {
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            text-transform: uppercase;
            margin-left: 15px;
        }


        header nav .myAccount .ctaGroup .cta {
            width: 135px;
            height: 35px;
            border: 1px solid #f38e11;
            font-size: 12px;
            font-weight: 500;
            border-radius: 35px;
            color: #f38e11;
            cursor: pointer;
        }

        header nav .myAccount .ctaGroup .cta+.cta {
            margin-left: 15px;
        }

        header nav .myAccount .ctaGroup .cta.active {
            background-color: #f38e11;
            color: #fff;
        }

        .clearfix:after {
            display: block;
            clear: both;
        }



        /*----- Phần menu -----*/

        .menu li {
            margin: 0px;
            list-style: none;
            font-family: 'Ek Mukta';
        }

        .menu a {
            transition: all linear 0.15s;
            color: #000000;
            text-decoration: none;
        }

        .menu>li:hover>a {
            text-decoration: none;
            color: #c97833;
        }

        .menu .arrow {
            font-size: 11px;
            line-height: 0%;
        }

        /*----- css cho phần menu cha -----*/
        .menu>ul>li {
            float: left;
            display: inline-block;
            position: relative;
            font-size: 19px;
        }

        .menu>ul>li>a {
            display: inline-block;
            color: #3c3984;
        }

        /*----css cho menu con----*/
        .menu>li:hover .sub-menu {
            z-index: 1;
            opacity: 1;
        }

        .sub-menu {
            width: 100%;
            padding: 5px 0px;
            position: absolute;
            top: 100%;
            left: 0px;
            z-index: -1;
            opacity: 0;
            transition: opacity linear 0.15s;
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.2);
            flex-wrap: wrap;
        }

        .sub-menu li {
            display: block;
            font-size: 16px;

        }

        .sub-menu li a {
            padding: 10px 30px;
            display: block;
        }

        .item>input {
            color:
                #1a202c;
            font-family:
                -apple-system;
            font-weight:
                600;
            line-height:
                19px;
        }

        .hotel_content {
            display: block;
            text-align: center;
            margin: 0 auto;
            position: relative;
            z-index: 10;
            margin-top: 62px;
        }

        .rate {
            display: flex;
            align-items: center;
        }

        .avgrate {
            color: #ffffff;
            padding: 1px 4px;
            font-size: 14px;
            background: #f38e11;
            font-weight: 600;
            line-height: 16px;
            border-radius: 4px;
        }

        .address {
            color: #1a202c;
            display: -webkit-inline-box;
            font-size: 12px;
            margin-top: 6px;
            line-height: 14px;
        }

        .address p {
            display: -webkit-box;
            overflow: hidden;
            font-size: 17px;
            font-weight: 400;
            line-height: 16px;
            -webkit-line-clamp: 2;
            margin-left: 5px;
        }

        .datehidden {
            display: none;
        }

        .list_price li {
            list-style: none;
        }

        .list_price li a {
            text-decoration: none;
        }

        .list_price li a:hover {
            text-decoration: none;
            color: #f38e11;
        }

        .list_price li a::before {
            content: " ";
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50px;
            background-color: #f38e11;
            margin-right: 5px;
        }

        .show {
            display: flex;
        }

        .activept {
            background-color: #f38e11;
        }

        .defau {
            background-color: #00B6F3;
        }

        .defau:hover {
            background-color: #1c6780;
        }

        .LocationRating_container__1HDUK {
            margin: 16px auto;
            max-width: 1188px;
        }

        .LocationRating_container__1HDUK .LocationRating_title__gsIh7 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 30px;
            line-height: normal;
        }

        .LocationRating_container__1HDUK .LocationRating_row__CD4X_ {
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -webkit-flex-direction: row;
            -moz-box-orient: horizontal;
            -moz-box-direction: normal;
            flex-direction: row;
        }

        .LocationRating_container__1HDUK .LocationRating_row__CD4X_ .LocationRating_icon__3CfxL {
            position: relative;
            margin-right: 30px;
        }

        .LocationRating_container__1HDUK .LocationRating_row__CD4X_ .LocationRating_icon__3CfxL .LocationRating_value__1A4mB {
            color: #f36;
            font-size: 30px;
            font-weight: 600;
            text-align: center;
            position: absolute;
            width: 100%;
            top: 42px;
        }

        .LocationRating_container__1HDUK .LocationRating_row__CD4X_ .LocationRating_icon__3CfxL .LocationRating_value-text__1Xvyu {
            font-weight: 600;
            text-align: center;
            position: absolute;
            width: 100%;
            top: 68px;
            font-size: 14px;
        }

        .LocationRating_container__1HDUK .LocationRating_row__CD4X_ .LocationRating_des__2MIav {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: normal;
        }

        .LocationRating_container__1HDUK .LocationRating_row__CD4X_ .LocationRating_des__2MIav {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: normal;
        }
        .ht .image{
            position: relative;
        }
        .ht .image a{
    position: absolute;
    right: 10px;
    top: 5px;
        }
    </style>
@stop


@section('content')

    <div class="body">
        <div class="container-fluid" style="background-color: #F4F8FA; margin: 0px; padding:0px;">
            <div class="container-fluid" style="background-color: white; margin: 0px; padding:0px;position: fixed;">
                <div class="containerr" style="height: 130px;">
                    <header class="caidau">
                        <nav style=" width: 100%; height: 50px;">
                            <div class="wrapper">
                                <div class="menu nav__pc">
                                    <div class="logo">
                                        <a href="{{ route('home.index') }}"
                                            style="color: #241a71;">Booking<span>Hotel</span>.vn</a>
                                    </div>
                                    <ul class="nav__list clearfix">
                                        <li>Khuyến mãi</li>
                                        <li>Liên hệ</li>
                                        <li><a href="">Đặt phòng nhanh</a>
                                            <ul class="sub-menu">
                                                <li style="margin: 0;"><a style="padding: 15px 30px;" href="#"
                                                        data-toggle="modal" data-target="#exampleModal">Cá nhân</a></li>
                                                <li style="margin: 0;"><a style="padding: 15px 33px;" href="#"
                                                        data-toggle="modal" data-target="#phongdoan">Tập thể</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="menu__mobile">
                                <div class="logo">Booking <span>Hotel</span>.vn</div>
                            </div>



                            <label for="nav-mobile-input" class="nav__bars-btn">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
                                    class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                                    </path>
                                </svg>
                            </label>

                            <input type="checkbox" class="nav__input" name="" id="nav-mobile-input" hidden>

                            <label for="nav-mobile-input" class="nav__overlay"></label>

                            <div class="nav__mobile">
                                <label for="nav-mobile-input" class="nav__mobile-close">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times"
                                        class="svg-inline--fa fa-times fa-w-11" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                        <path fill="currentColor"
                                            d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                        </path>
                                    </svg>
                                </label>
                                <ul class="nav__mobile-list">
                                    <li class="nav__mobile-link">Room</li>
                                    <li class="nav__mobile-link">Flight</li>
                                    <li class="nav__mobile-link">Today's Deal</li>
                                    <li class="nav__mobile-link">Sign In</li>
                                    <li class="nav__mobile-link">Create Account</li>
                                </ul>
                            </div>

                            <div class="myAccount nav__pc">
                                <div class="ctaGroup">
                                    @if (Auth::check())
                                        <b>Xin chào:&nbsp;</b>
                                        <p class="nav__mobile-link" style="margin: 0px"> {{ Auth::user()->name }}</p>
                                        <p style="margin: 0px ;"><a href="{{ route('home.logout') }}"
                                                style="text-decoration:none">&nbsp;| Đăng xuất</a></p>
                                    @else
                                        <div class="cta"><a href="#" style="color: black" data-toggle="modal"
                                                data-target="#login">Sign In</a></div>
                                        <div class="cta active"><a style="color: white" href="{{ route('home.register') }}"
                                                data-toggle="modal" data-target="#register">Register</a></div>
                                    @endif
                                </div>
                            </div>
                        </nav>
                    </header>

                    <div class="hotel_content" style="margin-top: 80px; width:100%">
                        <div class="booking_info PC">
                            <form class="booking_details tab__content" style="width: 1111px" id="Hotels"
                                action="{{ route('search.hotel') }}" method="GET">
                                <div class="item">
                                    <p style="margin: 0px;">Địa điểm:</p>
                                    <i class="fa fa-search"></i>
                                    <input class="timkiem" type="text" name="city" placeholder="Enter a destination"
                                        value="{{ $namecity }}" required style="border: none;padding-left: 4px;">
                                </div>

                                <div class="item" style="border-right: 1px solid #f38e11;">
                                    <p style="margin: 0px;">Thời gian đến:</p>
                                    <input type="date" name="startDate" value="{{ $startDate }}">

                                </div>
                                <div class="item" style="border: none;">
                                    <span class=""
                                        style="font-weight:600;font-family:-apple-system;">{{ $days }}</span>
                                    <svg width="10" height="9" fill="none">
                                        <path d="M4.982.504h.173A3.319 3.319 0 008.66 6.01 3.982 3.982 0 114.982.5v.004z"
                                            stroke="#718096" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="item">
                                    <p style="margin: 0px;">Thời điểm đi:</p>
                                    <input type="date" name="endDate" value="{{ $endDate }}">
                                </div>

                                <div class="item">
                                    <div class="cta active">
                                        {{-- <input type="hidden" name="page" value="1"> --}}
                                        <input type="hidden" name="orderBy" value="DEFAULT">
                                        {{-- <input type="hidden" name="condition" value="price"> --}}
                                        <input class="cta active" type="submit" value="Tìm">
                                    </div>
                                </div>
                            </form>

                            <div class="booking_details tab__content" id="Homes">
                                <div class="item">
                                    <i class="fa fa-search"></i>
                                    Enter a destination
                                </div>

                                <div class="item">
                                    <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                    <div class="days">Thursday</div>
                                </div>

                                <div class="item">
                                    <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                    <div class="days">Thursday</div>
                                </div>

                                <div class="item">
                                    <div class="people price">Giá<i class="fa fa-angle-down"></i></div>
                                </div>

                                <div class="item">
                                    <div class="cta active">Search</div>
                                </div>

                            </div>

                        </div>

                        <div class="booking_info mobile">

                            <div class="opt">
                                <span class="tab__link_mobile active">Hotels</span>
                                <span class="tab__link_mobile">Homes</span>
                            </div>

                            <div class="booking_details tab__content" id="Hotels">
                                <div class="item">
                                    <i class="fa fa-search"></i>
                                    Enter a destination
                                </div>

                                <div class="item">
                                    <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                    <div class="days">Thursday</div>
                                </div>

                                <div class="item">
                                    <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                    <div class="days">Thursday</div>
                                </div>

                                <div class="item">
                                    <div class="people">2 adults, 0 children <i class="fa fa-angle-down"></i></div>
                                </div>

                                <div class="item">
                                    <div class="cta active">Search</div>
                                </div>
                            </div>

                            <div class="booking_details tab__content_mobile" id="Homes">
                                <div class="item">
                                    <i class="fa fa-search"></i>
                                    Enter a destination
                                </div>

                                <div class="item">
                                    <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                    <div class="days">Thursday</div>
                                </div>

                                <div class="item">
                                    <div class="date">31st Dec 2020 <i class="fa fa-angle-down"></i></div>
                                    <div class="days">Thursday</div>
                                </div>

                                <div class="item">
                                    <div class="people price">Giá<i class="fa fa-angle-down"></i></div>
                                </div>

                                <div class="item">
                                    <div class="cta active">Search</div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="clearfix"></div>


            <div class="main container"
                style="font-family:-apple-system;background-color: #F4F8FA;width: 100%;height: 100%;margin-top: 10px;margin-top:140px;">
                <div class="location" style="width: 100%;min-height: 130px;display: grid; ">
                    <div style="margin: 0;display: flex;padding: 0;flex-wrap: wrap;list-style: none;align-items: center; ">
                        <a href="">Khách sạn</a>
                        <li aria-hidden="true"
                            style="display: flex;margin-left: 8px;user-select: none;margin-right: 8px;"> › </li>
                        <p style="font-size: 12px;line-height: 14px;margin: 0;font-weight: 400;">{{ $namecity }}</p>
                    </div>
                    <div style="display: flex;align-items: center;justify-content: space-between;">
                        <h3 style="font-size: 20px;font-family: sans-serif;font-weight: bold;"> {{ $sohotels }} Khách
                            sạn tại {{ $namecity }}</h3>
                    </div>
                </div>
                <div style="width: 100%;min-height: 400px;overflow:auto; ">
                    <div class="fillter" style="    min-height: 400px;float: left;width: 25%;">
                        <div class="filter"
                            style="border-radius: 8px;background-color: white;margin-right: 10px;padding-left: 20px;padding-right: 20px;">
                            <div class="MuiBox-root jss139 jss133" style="font-size: 16px;">Bộ lọc
                                <a href="{{ route('deletefilter', $city) }}?startDate={{ $startDate }}&endDate={{ $endDate }}&city={{ $namecity }}&orderBy=DEFAULT&price=0&page=1"
                                    style="text-decoration: none;">
                                    <p class="" style="">Xóa tất cả lọc</p>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div style="border-bottom: 1px solid #c2c3c4;">
                                <p>Khoảng giá (1 đêm)</p>
                                <ul class="list_price">
                                    <li><a class="{{ Request::get('price') == 0 || Request::get('price') == '' ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 0]) }}">Tất cả</a></li>
                                    <li><a class="{{ Request::get('price') == 1 ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 1]) }}">Dưới 500.000</a></li>
                                    <li><a class="{{ Request::get('price') == 2 ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 2]) }}">500.000 -
                                            1.000.000</a></li>
                                    <li><a class="{{ Request::get('price') == 3 ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 3]) }}">1.000.000 -
                                            3.000.000</a></li>
                                    <li><a class="{{ Request::get('price') == 4 ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 4]) }}">3.000.000 -
                                            5.000.000</a></li>
                                    <li><a class="{{ Request::get('price') == 5 ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 5]) }}">5.000.000 -
                                            7.000.000</a></li>
                                    <li><a class="{{ Request::get('price') == 6 ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 6]) }}">7.000.000 -
                                            10.000.000</a></li>
                                    <li><a class="{{ Request::get('price') == 7 ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['price' => 7]) }}">10.000.000</a></li>
                                </ul>
                            </div>


                            <div class="" style="margin-top: 20px;">
                                <form action="{{ route('search.searchhotelbycheckbox', $city) }}" id="form_price"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="page" value="1">
                                    <input type="hidden" name="startDate" value="{{ $startDate }}">
                                    <input type="hidden" name="endDate" value="{{ $endDate }}">
                                    @if (Request::get('price'))
                                        <input type="hidden" name="price" value="<?php echo Request::get('price'); ?>">
                                    @else
                                        <input type="hidden" name="price" value="0">
                                    @endif

                                    @if (Request::get('condition'))
                                        <input type="hidden" name="condition" value="<?php echo Request::get('condition'); ?>">
                                    @endif
                                    @if (Request::get('orderBy'))
                                        <input type="hidden" name="orderBy" value="<?php echo Request::get('orderBy'); ?>">
                                    @else
                                        <input type="hidden" name="orderBy" value="DEFAULT">
                                    @endif
                                    <div class=""
                                        style="display: flex;align-items: center;justify-content: space-between;">
                                        <p class="" style="font-size: 14px;font-weight: 600;line-height: 17px;">Sao
                                            khách sạn</p>
                                    </div>
                                    <div class="container__star">


                                        @for ($i = 5; $i > 0; $i--)
                                            <div class="form-check"
                                                style="display: flex;align-items: center;margin-top: 5px;">
                                                <label for="star-{{ $i }}">
                                                    @php
                                                        $stars = session()->get('stars');
                                                        if ($stars !== null) {
                                                            $checked = $stars;
                                                        } else {
                                                            $checked = [];
                                                        }
                                                    @endphp

                                                    <input class="form-check-input"
                                                        {{ in_array($i, $checked) ? 'checked' : '' }} type="checkbox"
                                                        value="{{ $i }}" id="star" name="stars[]"
                                                        onchange="this.form.submit();" style="width: 16px; height: 16px;">
                                                    <div class="form-check-label" for="star">
                                                        @for ($y = 1; $y < $i + 1; $y++)
                                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                                focusable="false" data-prefix="fas" data-icon="star"
                                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                                viewBox="0 0 576 512" style="height: 12px;">
                                                                <path fill="currentColor"
                                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
                                                                    style="color: #f38e11;" />
                                                            </svg>
                                                        @endfor
                                                    </div>

                                                </label>
                                            </div>
                                        @endfor

                                    </div>

                                    <div class=""
                                        style="display: flex;align-items: center;justify-content: space-between;">
                                        <p class="" style="font-size: 14px;font-weight: 600;line-height: 17px;">Loại
                                            khách sạn</p>
                                    </div>
                                    <div class="container__star">
                                        @foreach ($categories as $category)
                                            <div class="form-check"
                                                style="display: flex;align-items: center;margin-top: 5px;">
                                                <label for="type-{{ $category->id }}">
                                                    @php
                                                        $types = session()->get('types');
                                                        // $checked = [];
                                                        if ($types !== null) {
                                                            $checked = $types;
                                                        } else {
                                                            $checked = [];
                                                        }
                                                    @endphp
                                                    <input class="form-check-input"
                                                        {{ in_array($category->id, $checked) ? 'checked' : '' }}
                                                        type="checkbox" value="{{ $category->id }}" id="type"
                                                        name="types[]" onchange="this.form.submit();"
                                                        style="width: 16px; height: 16px;">
                                                    <div class="form-check-label" for="star">
                                                        <p>{{ $category->category }}</p>
                                                    </div>

                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class=""
                                        style="display: flex;align-items: center;justify-content: space-between;">
                                        <p class="" style="font-size: 14px;font-weight: 600;line-height: 17px;">Đánh giá tốt nhất</p>
                                    </div>
                                    <div class="container__star">
                                        @for ($i = 1; $i<4 ; $i++)
                                            <div class="form-check"
                                                style="display: flex;align-items: center;margin-top: 5px;">
                                                <label for="rateht-{{ $i }}">
                                                    @php
                                                        $rateht = session()->get('rateht');
                                                        if ($rateht !== null) {
                                                            $checked = $rateht;
                                                        } else {
                                                            $checked = [];
                                                        }
                                                    @endphp
                                                    <input
                                                    {{ in_array($i, $checked) ? 'checked' : '' }}
                                                     class="form-check-input" type="checkbox" value="{{$i}}" id="type"
                                                        name="rateht[]" onchange="this.form.submit();"
                                                        style="width: 16px; height: 16px;">
                                                    <div class="form-check-label" for="rateht">
                                                        <p>
                                                            @if($i == 1)
                                                            Tuyệt vời
                                                            @elseif($i == 2)
                                                                Rất tốt
                                                            @else
                                                                Tốt
                                                            @endif
                                                        </p>
                                                    </div>

                                                </label>
                                            </div>
                                        @endfor
                                    </div>

                                </form>

                            </div>




                        </div>
                    </div>
                    <div class="hotels" style="width: 75%;float: right;min-height: 400px;">
                        @if ($sohotels != 0)
                            <div class="title"
                                style="width: 100%;height: 50px; margin-bottom: 10px; font-family: sans-serif;">
                                <div class="MuiBox-root">
                                    <div class="MuiBox-root-item">
                                        <a class="{{ Request::get('orderBy') == 'DEFAULT' || Request::get('orderBy') == '' ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['condition' => 'price', 'orderBy' => 'DEFAULT']) }}&startDate={{ $startDate }}&endDate={{ $endDate }}&page=1">BKHT
                                            đề xuất</a>
                                    </div>
                                    <div class="MuiBox-root-item">
                                        <a class="{{ Request::get('orderBy') == 'ASC' ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['condition' => 'price', 'orderBy' => 'ASC']) }}&startDate={{ $startDate }}&endDate={{ $endDate }}&page=1">Giá
                                            tăng dần</a>
                                    </div>
                                    <div class="MuiBox-root-item">
                                        <a class="{{ Request::get('orderBy') == 'DESC' ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['condition' => 'price', 'orderBy' => 'DESC']) }}&startDate={{ $startDate }}&endDate={{ $endDate }}&page=1">Giá
                                            giảm dần</a>
                                    </div>
                                    <div class="MuiBox-root-item">
                                        <a class="{{ Request::get('orderBy') == 'STARDEFAULT' ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['condition' => 'star', 'orderBy' => 'STARDEFAULT']) }}&startDate={{ $startDate }}&endDate={{ $endDate }}&page=1">Sao
                                            khách sạn</a>
                                    </div>
                                    <div class="MuiBox" style="width:25%">
                                        <a class="{{ Request::get('orderBy') == 'RATEDEFAULT' ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['condition' => 'rate', 'orderBy' => 'RATEDEFAULT']) }}&startDate={{ $startDate }}&endDate={{ $endDate }}&page=1">Đánh
                                            giá cao nhất</a>
                                    </div>
                                </div>
                            </div>
                            @foreach ($hotels as $hotel)
                                {{-- @foreach ($hotel as $ht) --}}
                                <div class="ht"
                                    style="border-radius: 8px;width: 100%;height: 200px;display: flex;flex-direction: row;justify-content: flex-end;align-content: space-around; padding: 10px;margin-bottom: 10px; background-color: white;">
                                    <div class="image" style="width: 30%; float:left;">
                                        @if(Auth::check())
                                        <a  href="{{ route('addfavorite', $hotel[0]['hotel_id']) }}">
                                            @if(in_array($hotel[0]['hotel_id'], $favohotel))
                                            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" fill="red"></path> </svg>
                                            @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                              </svg>
                                            @endif
                                        </a>
                                        @endif
                                        <img src="../images/hotels/{{ $hotel[0]['image'] }}" class=""
                                            style="border-radius: 8px;width: 100%;height: 100%;">
                                    </div>
                                    <div class="name" style="width: 40%; float:left;margin-left: 10px;">
                                        <div
                                            style="font-weight: 600;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;font-size: 18px;line-height: 21px;">
                                            <a
                                                href="{{ route('hotel.detail', $hotel[0]['hotel_id']) }}?startDate= {{ $startDate }}&endDate={{ $endDate }}">{{ $hotel[0]['name'] }}</a>

                                        </div>
                                        <div
                                            title="Số sao đánh giá này do bạn Dũng tự điền, phản ánh sự hư cấu cũng như sự không có thật của các hotel.">
                                            @for ($i = 0; $i < $hotel[0]['star']; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="star"
                                                    class="svg-inline--fa fa-star fa-w-18" role="img"
                                                    viewBox="0 0 576 512" style="height: 12px;">
                                                    <path fill="currentColor"
                                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"
                                                        style="color: #f38e11;" />
                                                </svg>
                                            @endfor
                                            <p>{{ showtypehotel($hotel[0]['category_id']) }}</p>
                                        </div>
                                        <div class="rate">
                                            <p>
                                                <span class="avgrate" data-selected="true"
                                                    data-label-id="0">{{ showRate($hotel[0]['hotel_id']) }}</span>
                                                <span>
                                                    @if (showRate($hotel[0]['hotel_id']) >= 9)
                                                        Tuyệt vời
                                                    @elseif(showRate($hotel[0]['hotel_id']) >= 7 && showRate($hotel[0]['hotel_id']) < 9)
                                                        Tốt
                                                    @elseif(showRate($hotel[0]['hotel_id']) >= 5 && showRate($hotel[0]['hotel_id']) < 7)
                                                        Tạm
                                                    @elseif(showRate($hotel[0]['hotel_id']) >= 1 && showRate($hotel[0]['hotel_id']) < 4)
                                                        Tệ
                                                    @else
                                                        Chưa có đánh giá
                                                    @endif
                                                </span>
                                            <div style="width: 1px;height: 14px;margin: 0 8px;background: #cdc1c1;;"></div>
                                            <span class=""
                                                style="margin-left: 4px;">({{ countRate($hotel[0]['hotel_id']) }} đánh
                                                giá)</span>
                                            </p>
                                        </div>
                                        <div class="address">
                                            <svg width="16" height="16" fill="none">
                                                <path d="M8.467 3.8V2a1 1 0 00-1-1h-.8a1 1 0 00-1 1v1.8" stroke="#1A202C"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M1 7.467a1 1 0 001 1h9.838a1 1 0 00.64-.232l1.6-1.333a1 1 0 000-1.537l-1.6-1.333a1 1 0 00-.64-.232H2a1 1 0 00-1 1v2.667zM5.667 10.333V14a1 1 0 001 1h.8a1 1 0 001-1v-3.667"
                                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            <p>{{ $hotel[0]['address'] }}</p>
                                        </div>
                                        <div class="address">
                                            <svg width="16" height="16" fill="none">
                                                <path d="M8.467 3.8V2a1 1 0 00-1-1h-.8a1 1 0 00-1 1v1.8" stroke="#1A202C"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M1 7.467a1 1 0 001 1h9.838a1 1 0 00.64-.232l1.6-1.333a1 1 0 000-1.537l-1.6-1.333a1 1 0 00-.64-.232H2a1 1 0 00-1 1v2.667zM5.667 10.333V14a1 1 0 001 1h.8a1 1 0 001-1v-3.667"
                                                    stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            <p>
                                                <?php $countroomtype = count($hotel); ?>
                                                @for ($i = 0; $i < $countroomtype; $i++)
                                                    <?php
                                                    if (isset($hotel[$i]['room_type']['type'])) {
                                                        echo $hotel[$i]['room_type']['type'];
                                                    }
                                                    if ($i < $countroomtype - 1) {
                                                        echo ', ';
                                                    }
                                                    if ($i == $countroomtype - 1) {
                                                        echo '.';
                                                    }
                                                    ?>
                                                @endfor
                                            </p>
                                        </div>
                                    </div>
                                    <div class="price"
                                        style="width: 30%; float:right; display: flex; justify-content: flex-end;align-items: flex-end;">
                                        <div class=""
                                            style="color: #1a202c;width: 100%;display: flex;padding: 15px 15px 0 0;font-size: 12px;align-items: flex-end; padding-left: 16px;flex-direction: column;">
                                            <div class=""
                                                style="color: #ffffff;width: 42px;display: flex;position: relative;font-size: 12px;background: #f38e11;margin-top: 12px;min-height: 18px;align-items: center;font-weight: 600;line-height: 14px;border-radius: 3px 3px 0px 3px;justify-content: center;">
                                                <div
                                                    style="    padding: 2px 4px;font-size: 14px;font-weight: 600;line-height: 16px;">
                                                    -{{ $hotel[0]['discount'] }}%</div>
                                                <div
                                                    style="right: 0; width: 0;bottom: -4px;height: 0;position: absolute;border-color: transparent #f38e11 transparent transparent;border-style: solid;border-width: 0px 5px 5px 0;">
                                                </div>
                                            </div>
                                            <span class=""
                                                style="color: #4A5568;margin: 6px 0 0 0;font-size: 14px;line-height: 16px;text-decoration-line: line-through;">{{ number_format($hotel[0]['price']) }}đ
                                                /đêm</span>

                                            <span class=""
                                                style="font-size: 20px;margin-top: 2px;font-weight: 600;line-height: 23px;">{{ number_format($hotel[0]['price'] - ($hotel[0]['price'] * $hotel[0]['discount']) / 100) }}
                                                <span class=""
                                                    style="font-size: 14px; line-height: 16px; font-weight: 400;">
                                                    /đêm</span>
                                            </span>
                                            <div
                                                style="border: 1px dashed #cbd5e0;display: flex;margin-top: 8px;align-items: center;border-radius: 8px;padding: 10px;flex-direction: column;">
                                                <div style="align-items: center;">
                                                    <p
                                                        style="font-weight: 400; display: flex; font-size: 14px; align-items: center; line-height: 16px;">
                                                        <span style="white-space: nowrap;">Nhập mã:&nbsp;</span>
                                                        {{-- @foreach ($codes as $code) --}}
                                                        <span class=""
                                                            style="color: #00B6F3;display: flex;font-size: 14px;align-items: center;font-weight: 600;line-height: 16px;">{{ $codes->first()->code }}</span>
                                                        {{-- @endforeach --}}
                                                        <span class=""
                                                            style="color: #ffffff;display: flex;padding: 1px 3px;font-size: 14px;background: #00B6F3;align-items: center;font-weight: 600;line-height: 16px;margin-left: 4px;border-radius: 3px;">
                                                            <span
                                                                style="padding-right: 4px;">-</span>{{ $codes->first()->reduction }}%
                                                        </span>

                                                    </p>
                                                    <p class=""
                                                        style="width: 100%;font-size: 20px;margin-top: 3px;text-align: right;word-break: break-word;font-weight: 600;line-height: 23px;color: #f38e11;">
                                                        {{ number_format($hotel[0]['price'] - ($hotel[0]['price'] * $hotel[0]['discount']) / 100 - (($hotel[0]['price'] * $hotel[0]['discount']) / 100 - ((($hotel[0]['price'] * $hotel[0]['discount']) / 100) * $codes->first()->reduction) / 100)) }}đ
                                                        <span class=""
                                                            style="font-size: 14px;font-weight: 400;line-height: 16px;margin-left: 2px;">/đêm</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endforeach --}}
                            @endforeach

                            <div class="phantrang"
                                style="width: 100%;height: 150px;display: flex;justify-content: center;align-items: center;">
                                <div class="phantrang_container" style="width: 100%;">
                                    @if ($sohotels / 2 != null)
                                        <ul style="display: flex; justify-content: center;">
                                            <div><a href="{{ request()->fullUrlWithQuery(['page' => 1]) }}"><svg
                                                        style="stroke: #1A202C;transform: rotate(90deg);" width="14"
                                                        height="8" fill="none" class="svgFillAll jss11675">
                                                        <path d="M13 1L7 7 1 1" stroke="#4A5568" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></a></div>
                                            @for ($i = 0; $i < $sohotels / 2; $i++)
                                                <li class="{{ $page == $i + 1 || $page == null ? 'activept' : 'defau' }}"
                                                    style="list-style: none;color: #FFF;width: 32px;height: 32px;font-size: 14px;font-weight: 600;display: flex;line-height: 16px;border-radius: 100px;margin: 0px 10px;align-items: center;justify-content: center;;">
                                                    <a style="color: white;text-decoration: none;"
                                                        href="{{ request()->fullUrlWithQuery(['page' => $i + 1]) }}">{{ $i + 1 }}</a>
                                                </li>
                                            @endfor
                                            <div><a
                                                    href="{{ request()->fullUrlWithQuery(['page' => round($sohotels / 2)]) }}"><svg
                                                        style="stroke: #1A202C;transform: rotate(270deg);" width="14"
                                                        height="8" fill="none" class="svgFillAll jss11675">
                                                        <path d="M13 1L7 7 1 1" stroke="#4A5568" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></a></div>
                                        </ul>
                                        {{-- @else --}}

                                    @endif
                                </div>
                            </div>
                        @else
                            <div
                                style="display: flex;margin-top: 155px;align-items: center;flex-direction: column;justify-content: center;">
                                <div class="MuiBox-root jss7352">
                                    <div class="jss124 jss7350">
                                        <div class="jss125 jss128" style="border-radius: 0px;"></div>
                                        <div class="lazyload-wrapper ">
                                            <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_no_result_search_listing.svg"
                                                class="jss127 jss7350" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p
                                    style="font-size: 14px;margin-top: 16px;font-weight: 400;line-height: 19px;font-family: cursive;">
                                    Không tìm thấy kết quả nào với các tiêu chí tìm kiếm của bạn.</p>
                                <p style="font-family: serif;">Vui lòng thay đổi tiêu chí tìm kiếm</p>

                            </div>
                        @endif
                    </div>

                </div>

            </div>





            <div class="clearfix"></div>
            <div class="container-fluid" style="background-color: white; margin: 0px; padding:0px;overflow:auto; ">
                <div class="container" style="overflow:auto; ">
                    <div class="" style="padding: 12px 0px 30px;">
                        <div class="LocationRating_container__1HDUK">
                            <div class="LocationRating_title__gsIh7">Đánh giá khách sạn, Khu nghỉ dưỡng ở
                                {{ $namecity }}</div>
                            <div class="LocationRating_row__CD4X_">
                                <div class="LocationRating_icon__3CfxL">
                                    <svg class="rc-progress-circle" viewBox="0 0 100 100"
                                        style="width: 116px; height: 116px;">
                                        <circle class="rc-progress-circle-trail" r="47" cx="50"
                                            cy="50" stroke="#E2E8F0" stroke-linecap="round" stroke-width="6"
                                            style="stroke: rgb(226, 232, 240); stroke-dasharray: 295.31px, 295.31; stroke-dashoffset: 0; transform: rotate(-90deg); transform-origin: 50% 50%; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s ease 0s, stroke-width 0.06s ease 0.3s, opacity 0.3s ease 0s; fill-opacity: 0;">
                                        </circle>
                                        <circle class="rc-progress-circle-path" r="47" cx="50"
                                            cy="50" stroke-linecap="round" stroke-width="6" opacity="1"
                                            style="stroke: rgb(255, 51, 102); stroke-dasharray: 295.31px, 295.31; stroke-dashoffset: 0; transform: rotate(-90deg); transform-origin: 50% 50%; transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s ease 0s, stroke-width 0.06s ease 0.3s, opacity ease 0s; fill-opacity: 0;">
                                        </circle>
                                    </svg>
                                    <div class="LocationRating_value__1A4mB">{{ showRatecity($city) }}</div>
                                    <div class="LocationRating_value-text__1Xvyu">
                                        @if (showRatecity($city) >= 9)
                                            Tuyệt vời
                                        @elseif(showRatecity($city) >= 7 && showRatecity($city) < 9)
                                            Tốt
                                        @elseif(showRatecity($city) >= 5 && showRatecity($city) < 7)
                                            Tạm
                                        @elseif(showRatecity($city) == 0)
                                            đánh giá
                                        @else
                                            Tệ
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <div class="LocationRating_des__2MIav">Các khách sạn ở {{ $namecity }} được đánh
                                        giá với số điểm trung bình {{ showRatecity($city) }}/10 từ
                                        {{ countRatecity($city) }} lượt đánh giá</div>
                                    <div class="LocationRating_des__2MIav">Các đánh giá hữu ích bởi các khách hàng đã từng
                                        ở {{ $namecity }} là thông tin quan trọng giúp bạn chọn được khách sạn phù hợp
                                        nhất.</div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiBox-root jss1821"
                            style="width: 100%; height: 4px; background: rgb(237, 242, 247); max-width: 1188px; margin: 30px auto 0px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>




@stop


@section('scripts')
    


    <script>
        @if ($errors->has('email') || $errors->has('password') || $errors->has('phone'))
            $('#register').modal('show');
        @endif
    </script>
    <script>
        @if (session()->has('error'))
            $('#login').modal('show');
        @endif
    </script>



    

@stop

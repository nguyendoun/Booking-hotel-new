<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Hotel Booking Landing Page</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/font.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/btr.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/room.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap.bundle.min.js')}}" />
  <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
  <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
<style>
  .avatar{
    width: 36px;
    height: 36px;
    display: flex;
    overflow: hidden;
    position: relative;
    font-size: 1.4285714285714286rem;
    align-items: center;
    flex-shrink: 0;
    font-family: Mt;
    line-height: 1;
    user-select: none;
    border-radius: 50%;
    justify-content: center;
  }
  .avatar img{
    color: transparent;
    width: 100%;
    height: 100%;
    object-fit: cover;
    text-align: center;
    text-indent: 10000px;

  }
  .jss72 {
    top: 46px;
    width: 250px;
    border: 1px solid #EDF2F7;
    padding: 10px 8px;
    z-index: 1;
    position: absolute;
    background: white;
    box-shadow: 0px 8px 8px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    border-radius: 8px;
}
.avatar-name{
  display: flex;
    align-items: center;
}
.box-user{
  display: none;
}

.jss73 {
    width: 100%;
    position: relative;
}
.jss74 {
    display: flex;
    padding: 14px 0;
    align-items: center;
    padding-left: 8px;
    border-radius: 8px;
}
.jss75 {
    color: #1A202C;
    font-size: 14px;
    line-height: 17px;
}
ul.typeahead.dropdown-menu {
    display: flex;
    flex-direction: column;
    transform: translate(-36px,25px);
    min-width: 630px;
}
.dropdown-menu li {
    display: flex;
    align-items: center;
    margin-left: 6px;
    border-bottom: 2px solid #f1f3f5;
}
.dropdown-menu li:last-child {
    border-bottom: none;
}
.dropdown-menu li::before {
    content: ' ';
    background-image: url('images/location.svg');
    background-size: 15px 15px;
    display: block;
    min-width: 30px;
    width: 30px;
    height: 30px;
    background-color: #f1f3f5;
    border-radius: 8px;
    background-position: center center;
    margin: 10px;
    background-repeat: no-repeat;
}

.lichsu button {
    display: flex;
    border: none;
    align-items: center;
    background-color: white;
}
.lichsu .ct {
  border-bottom: 2px solid #f1f3f5;
}
.lichsu .ct:last-child {
  border-bottom: none;
}

.lichsu .ct::before {
    content: ' ';
    background-image: url('images/history.png');
    background-size: 15px 15px;
    display: block;
    min-width: 30px;
    width: 30px;
    height: 30px;
    background-color: #f1f3f5;
    border-radius: 8px;
    background-position: center center;
    margin: 10px;
    background-repeat: no-repeat;
}

.dropdown-item{
  padding: 0px !important;
}
.dropdown-item strong {
    color: #f38e11;
}
.qwf{
    display: flex;
    justify-content: space-between;
    margin-inline: 10px;
}
.qwf>div{
    font-weight: 500;
}
#items{
  margin-inline: 10px;
}
button.deletee {
    color: #f38e11;
}
</style>
</head>

<body>
  @php 
  $ck = Cookie::get('cookie_t');
  if($ck !== null){
    
  $ck = json_decode($ck);
  $ck = array_reverse($ck);
  }
    Illuminate\Support\Facades\Session::forget('stars'); 
    Illuminate\Support\Facades\Session::forget('types'); 
@endphp

  <div class="containerr" style="heigh: 80vh">

    <header>
      <nav class="">
        <div class="menu--pc wrapper">
          <div class="nav nav__pc menu ">
            <div class="logo nav__pc--logo"><a href="/">Booking<span>Hotel</span>.vn</a></div>
            <ul class="nav__pc--list list clearfix">
              <li class="list-item list--sale">Khuyến mãi</li>
              <li class="list-item list--contact">Liên hệ</li>
              <li class="list-item list--quick">
                <a href="">Đặt phòng nhanh</a>
                <ul class="sub-menu">
                  <li class="quick quick--personal" style="margin: 0;"><a style="padding: 15px 30px;" href="#" data-toggle="modal" data-target="#exampleModal">Cá nhân</a></li>
                  <li class="quick quick--team" style="margin: 0;"><a style="padding: 15px 33px;" href="#" data-toggle="modal" data-target="#phongdoan">Tập thể</a></li>
                </ul>
              </li>
              <li class="list-item list--order">
                <a href="">Đơn hàng</a>
                <ul class="sub-menu">
                  <li class="order order--check" style="margin: 0;"><a style="padding: 15px 30px;" href="{{ route('checkticked')}}">Kiểm tra đơn hàng</a></li>
                  @if(Auth::check())
                  <li class="order order--user" style="margin: 0;"><a style="padding: 15px 30px;" href="{{ route('yourorders')}}">Đơn hàng của bạn</a></li>
                  @endif
                  {{-- <li style="margin: 0;"><a style="padding: 15px 33px;" href="#" data-toggle="modal" data-target="#phongdoan">Tập thể</a></li> --}}
                </ul>
              </li>
            </ul>
          </div>
        </div>


        {{-- <div class="menu--mobile">
          <div class="menu--mobile--logo">Booking <span>Hotel</span>.vn</div>
        </div>
        <label for="nav-mobile-input" class="nav__bars-btn">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
          </svg>
        </label>

        <input type="checkbox" class="nav__input" name="" id="nav-mobile-input" hidden>

        <label for="nav-mobile-input" class="nav__overlay"></label>

        <div class="nav__mobile">
          <label for="nav-mobile-input" class="nav__mobile-close">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
              <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
            </svg>
          </label>
          <ul class="nav__mobile-list">
            <li class="nav__mobile-link">Room</li>
            <li class="nav__mobile-link">Flight</li>
            <li class="nav__mobile-link">Today's Deal</li>
            <li class="nav__mobile-link">Sign In</li>
            <li class="nav__mobile-link">Create Account</li>
          </ul>
        </div> --}}

        <div class="myAccount nav__pc">
          <div class="ctaGroup">
            @if(Auth::check())
            <div class="userinfors avatar-name" onclick="change_style()" style="cursor: pointer;">
              <div class="userinfo userinfo__avatar avatar">
                @if(Auth::user()->image !== null)
                <img src="{{asset('images/'.Auth::user()->image)}}" class="card-img-top" style="width: 100%; height: 100%;">
                    @else
                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                @endif
              </div>
              <p class="userinfo userinfo__name nav__mobile-link" style="margin: 0px"> {{ Auth::user()->name}}</p>
              <svg width="10" height="6" fill="none" class="svgFillAll" style="stroke: rgb(26, 32, 44); margin-left: 6px;"><path d="M1.667 1.333L5 4.667l3.333-3.334" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
              
              <div class="userinfo userinfo__list box-user jss205 jss72" id="box-user" style="top: 65px">
                <div class="MuiBox-root jss206 jss73">
                  <div class="list__options MuiBox-root jss207 jss81">
                    <div class="list__options--acc MuiBox-root jss212 jss74">
                      <a href="{{ route('user.acc')}}" class="jss75">Tài khoản</a>
                    </div>
                    <div class="list__options--like MuiBox-root jss214 jss74">
                      <div class="MuiBox-root jss215 jss75">
                        <a href="{{ route('favorite')}}" class="jss75"> Yêu thích</a>
                      </div>
                    </div>
                    <div class="list__options--order MuiBox-root jss216 jss74">
                      <div class="MuiBox-root jss217 jss75">
                        <a href="{{ route('yourorders')}}" class="jss75">
                          Đơn phòng
                        </a>
                      </div>
                    </div>
                    <div class="list__options--ticketplant MuiBox-root jss218 jss74">
                      <div class="MuiBox-root jss219 jss75">Vé máy bay</div>
                    </div>
                    <div class="list__options--out MuiBox-root jss220 jss74">
                      <a class="jss75" href="{{ route('home.logout')}}" style="text-decoration:none">Đăng xuất</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @else
            <div class="cta user__login"><a href="#" style="color: black" data-toggle="modal" data-target="#login">Sign In</a></div>
            <div class="cta user__register active"><a style="color: white" href="#" data-toggle="modal" data-target="#register">Register</a></div>
            @endif
          </div>
      </nav>
    </header>

    <div class="hotel_content">

      <div class="info PC">
        <h2>Book hotels online</h2>
      </div>

      <div class="booking_info PC">

        <div class="opt">
          <span class="tab__link active">Hotels</span>
          <span class="tab__link">Homes</span>
        </div>
        <div>
          <form class="booking_details tab__content" id="Hotels" action="{{ route('search.hotel') }}" method="GET">

            <div class="item">
              <i class="fa fa-search"></i>
              <input value="" required class="timkiem" id="search" type="text" name="city" placeholder="Địa điểm, khách sạn"  autocomplete="off" style="border: none;padding-left: 4px;">
              
            </div>
  
            <div class="item">
              <p style="margin: 0px;">Thời gian đến:</p>
              <input type="date" name="startDate" value="{{ $dtnow }}" min="{{$dtnow}}">
            </div>
  
            <div class="item">
              <p style="margin: 0px;">Thời điểm đi:</p>
              <input type="date" name="endDate" value="{{ $dt }}">
            </div>
  
            <div class="item">
              <div class="cta active">
                <input type="hidden" name="orderBy" value="DEFAULT">
                <input class="cta active" type="submit" value="Tìm">
              </div>
            </div>
          </form>
  
          <form class="booking_details tab__content" id="Homes">
            <div class="item">
              <i class="fa fa-search"></i>
              <input required class="timkiem " id="" type="text" name="city" placeholder="Enter a destination" autocomplete="off"  style="border: none;padding-left: 4px;">
            </div>
  
            <div class="item">
              <p style="margin: 0px;">Thời gian đến:</p>
              <input type="date" name="startDate" value="{{ $dtnow }}" min="{{$dtnow}}">
            </div>
  
            <div class="item">
              <p style="margin: 0px;">Thời điểm đi:</p>
              <input type="date" name="endDate" value="{{ $dt }}">
            </div>
  
            <div class="item">
              <div class="cta active">
                <input type="hidden" name="orderBy" value="DEFAULT">
                <input class="cta active" type="submit" value="Tìm">
              </div>
            </div>
  
          </form>
          
          <ul class="dropdown-menu lichsu" role="listbox" id="lichsu" tabindex="1">
            <div class="qwf">
              <div>Tìm kiếm gần đây</div>
              <button class="deletee" onclick="yy()">Xóa lịch sử tìm kiếm</button>
            </div>
            <div id="items">
              @if($ck !== null)
                @foreach($ck as $key => $c)
                <button class="ct" type="button" onclick="testt(this.value)" value="{{getNameCity($c)}}" id="activeee">{{getNameCity($c)}}</button>
                {{-- <li onclick="test(this.value)" value="{{getNameCity($c)}}" id="activeee"><a id-city="{{$c}}" class="dropdown-item" href="#" role="option">{{getNameCity($c)}}</a></li> --}}
                @endforeach
              @else
                Chưa có lịch sử
              @endif
            </div>
            </ul>
        </div>
        

      </div>

      {{-- <div class="booking_info mobile">

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

      </div> --}}

    </div>

    <img src="{{asset('images/hotel.png')}}" class="hotel">
    <img src="images/car1.png" class="car1">
    <img src="images/car2.png" class="car2">
    <img src="images/car3.png" class="car3">
    <img src="images/car4.png" class="car4">
    {{-- <img src="images/dog.gif" class="dog_1"> --}}
    <img src="images/cloud.png" class="cloud">
    <img src="images/cloud.png" class="cloud_2">
    <img src="images/cloud.png" class="cloud_3">
    <img src="images/cloud.png" class="cloud_4">

  </div>

  <main style="margin-top: 20px; margin-inline: 80px;">
    <div class="qcao">
      <div class="nobody">
        <span class="photo">
          <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_support_247.svg" alt="logo_support_247" style="width: 52px; height: 52px;">
        </span>
        <span class="title-main" style="margin-top: 24px; white-space: nowrap;">Hỗ trợ khách hàng 24/7</span>
        <span class="title-sub">Chat là có, gọi là nghe, không quản đêm hôm, ngày nghỉ và ngày lễ.</span>
      </div>

      <div class="nobody">
        <span class="photo">
          <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_best_price.svg" alt="logo_best_price" style="width: 52px; height: 52px;">
        </span>
        <span class="title-main" style="margin-top: 24px; white-space: nowrap;">Giá tốt sát ngày</span>
        <span class="title-sub">Cam kết giá tốt nhất khi đặt gần ngày cho chuyến đi của bạn.</span>
      </div>

      <div class="nobody">
        <span class="photo">
          <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_total_hotel.svg" alt="logo_total_hotel" style="width:52px;height:52px">
        </span>
        <span class="title-main" style="margin-top:24px;white-space:nowrap">Hơn 8000+ khách sạn dọc Việt Nam</span>
        <span class="title-sub">Hàng nghìn khách sạn, đặc biệt là 4 và 5 sao, cho phép bạn thoải mái lựa chọn.</span>
      </div>


      <div class="nobody">
        <span class="photo">
          <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_payment.svg" alt="logo_payment" style="width: 52px; height: 52px;">
        </span>
        <span class="title-main" style="margin-top: 24px; white-space: nowrap;">Thanh toán dễ dàng, đa dạng</span>
        <span class="title-sub">Bao gồm thêm chuyển khoản ngân hàng và tiền mặt tại cửa hàng.</span>
      </div>
    </div>

  </main>

  <div class="roomtype" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: white;">
    <div class="roww mrgl0 mrgr0">
      <div class="deals-title mrgb1x">
        <h3>
          <a href="">TOP PHÒNG KHUYẾN MÃI</a>
        </h3>
        <span class="deals" style="padding-bottom:0px;margin-top:-5px;">&nbsp;</span>
      </div>
      <div class="rowư flexboxx">

        @foreach($rooms as $key => $room)
        <div id="{{ $room->id }}" class=" flexitem flexitem_4" style="border: 1px solid #e8e8e8;">
          <div class="popluar-category" style="background-color: white;">
            <a title=" {{ $room->hotel->name }}" class="mihawk-list-hotel popup_detail">
              <span class="thumb-info" style="width: 266px; height:232px">
                @if($room->images->first()->path != NULL)
                <div class="thumb-info-wrapper zoom" style="background:url(images/rooms/{{$room->images->first()->path}})" onmousemove="zoom(event)" ontouchmove="zoom(event)">
                  {{-- background:url(images/rooms/{{$room->images->path}}) --}}

                  <img class="img" style="width: 266px; height:232px" src="images/rooms/{{$room->images->first()->path}}">

                </div>
                @endif
                <span class="table-see-all">
                  <input type="button" value="xem chi tiết" href="" data-toggle="modal" data-target="#xemchitiet{{$room->id}}">
                </span>
              </span>
            </a>
            <p>Loại phòng: {{ $room->roomType->type }}</p>
            <h3 class="mrgt1x mrgb05 padl1x padr1x">
              <a class="title-promotion " href="//khachsan.chudu24.com/ks.5921.melia-ho-tram-beach-resort.html" target="_blank" hotelname=" {{ $room->hotel->name }}" hotelidint=" {{ $room->hotel->id }}" roomtypeidint=" {{ $room->roomType->id }}">{{ $room->hotel->name }}</a>
            </h3>
            @for ($i=0; $i < $room->hotel->star; $i++)
              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;" />
              </svg>
              @endfor
              <div class="padb1x padl1x padr1x">
                <span class="summary">Giá đặc biệt chỉ từ <span><b>{{ number_format($room->price)}}đ</b></span>/đêm</span>
              </div>
          </div>
        </div>


        <div class="modal fade" id="xemchitiet{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #ff7b0a;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Chi tiết phòng {{ $room->roomType->type }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid mt-2 mb-3">
                  <div class="row no-gutters">
                    <div class="col-md-7 pr-2">
                      <div class="card" style="width: 80%">
                        <div class="demo">
                          <div id="carouselExampleFade{{$room->id}}" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="https://i.imgur.com/KZpuufK.jpg" class="d-block w-100" alt="..." style="border-radius:8px;">
                              </div>
                              <div class="carousel-item">
                                <img src="https://i.imgur.com/GwiUmQA.jpg" class="d-block w-100" alt="..." style="border-radius:8px;">
                              </div>
                              <div class="carousel-item">
                                <img src="https://i.imgur.com/DhKkTrG.jpg" class="d-block w-100" alt="..." style="border-radius:8px;">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade{{$room->id}}" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon chuyen" aria-hidden="true" style="background: white;height: 40px;width: 40px;display: flex;align-items: center;justify-content: center;z-index: 2;border-radius: 100px;box-shadow: rgb(0 0 0 / 10%) 0px 8px 12px;cursor: pointer;position: absolute;top: 50%;transform: translate(-50%, -50%);left:0;">
                                <svg width="10" height="6" fill="none" class="svgFillAll jss3732" style="transform: rotate(90deg);">
                                  <path d="M1 1l4 4 4-4" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade{{$room->id}}" role="button" data-slide="next">
                              <span class="carousel-control-next-icon chuyen" aria-hidden="true" style="background: white;height: 40px;width: 40px;display: flex;align-items: center;justify-content: center;z-index: 2;border-radius: 100px;box-shadow: rgb(0 0 0 / 10%) 0px 8px 12px;cursor: pointer;position: absolute;top: 50%;transform: translate(-50%, -50%);right: -38px;">
                                <svg width="10" height="6" fill="none" class="svgFillAll jss3732" style="transform: rotate(-90deg);">
                                  <path d="M1 1l4 4 4-4" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                          {{-- <ul id="lightSlider">
                                      @foreach ($room->images as $image)
                                        <li data-thumb="images/rooms/{{$image->path}}">
                          <img src="images/rooms/{{$image->path}}">
                          </li>
                          @endforeach
                          </ul> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="card">
                        <div class="d-flex flex-row align-items-center">
                          <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ml-1">5.0</span>
                        </div>
                        <div class="about"> <span class="font-weight-bold">{{$room->hotel->name }}</span>
                          <h4 class="font-weight-bold">{{ number_format($room->price)}}đ</h4>
                        </div>
                        <hr>
                        <div class="product-description">
                          <div class="mt-2"> <span class="font-weight-bold">Description</span>
                            <p>{{$room->description}}</p>
                            <div class="bullets">
                              <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Wifi</span> </div>
                              <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Tivi</span> </div>
                              <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Phục vụ bữa ăn sáng</span> </div>
                              <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Không hút thuốc</span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" style="background-color: #ff7b0a;">Đặt</button>
              </div>
            </div>
          </div>
        </div>

        @endforeach
      </div>

    </div>
  </div>

  <div class="topdiemden" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: #e7e7e7;">
    <div class="roww mrgl0 mrgr0">
      <div class="deals-title mrgb1x">
        <h3>
          <a href="">TOP ĐIỂM ĐẾN</a>
        </h3>
        <span class="deals" style="padding-bottom:0px;margin-top:-5px;">&nbsp;</span>
      </div>
      <div class="rowư flexboxx">


        @foreach($cities as $key => $city)
        <div id="{{ $city->id }}" iddanhmuc="97" class=" flexitem flexitem_4">
          <div class="popluar-category" style="background-color: white;">
            <a title=" {{ $city->city }}" href="" class="mihawk-list-hotel popup_detail">
              <span class="thumb-info">
                <div class="thumb-info-wrapper">
                  <img class="img" title="  {{ $city->city }} " src="images/cities/{{$city->img}}" style="width:266px; height: 232px">
                </div>
              </span>
            </a>
            <h3 class="mrgt1x mrgb05 padl1x padr1x" style="padding: 30px 0 30px 10px;">
              <a class="title-promotion " href="{{ route('searchwithcity', $city->id) }}?city={{ $city->city }}&orderBy=DEFAULT" style="font-weight: 500;">{{ $city->city }}</a>
            </h3>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>

  <div class="chancang" style="margin: 0 auto; padding-inline: 100px; margin-top: 20px; background-color: white; padding-bottom: 50px;border-bottom: 5px solid #f38e11;">
    <div class="roww mrgl0 mrgr0">
      <div class="deals-title mrgb1x">
        <h3>
          <a href="">KHÁCH SẠN THEO THÀNH PHỐ</a>
        </h3>
        <span class="deals" style="padding-bottom:0px;margin-top:-5px;">&nbsp;</span>
      </div>
      <div class="rowư flexboxx">
        <div class="col" style="background-color: #e7e7e7;margin-right: 20px">
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col" style="background-color: #e7e7e7; margin-right: 20px">
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col" style="background-color: #e7e7e7; margin-right: 20px">
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col" style="background-color: #e7e7e7; margin-right: 20px">
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
        <div class="col" style="background-color: #e7e7e7;">
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.an-giang.html" title="Khách sạn An Giang">Khách sạn An Giang</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bac-lieu.html" title="Khách sạn Bạc Liêu">Khách sạn Bạc Liêu</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bao-loc.html" title="Khách sạn Bảo Lộc">Khách sạn Bảo Lộc</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ben-tre.html" title="Khách sạn Bến Tre">Khách sạn Bến Tre</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.bien-hoa.html" title="Khách sạn Biên Hòa">Khách sạn Biên Hòa</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.buon-me-thuot.html" title="Khách sạn Buôn Ma Thuột">Khách sạn Buôn Ma Thuột</a>
          </div>
          <div class="HotelNames">
            <a class="blue mihawk-list-hotel" href="//khachsan.chudu24.com/t.ca-mau.html" title="Khách sạn Cà Mau">Khách sạn Cà Mau</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.can-tho.html" title="Khách sạn Cần Thơ">Khách sạn Cần Thơ</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.con-dao.html" title="Khách sạn Côn Đảo">Khách sạn Côn Đảo</a>
          </div>
          <div class="HotelNames">
            <a class="blue bold mihawk-list-hotel" href="//khachsan.chudu24.com/t.dalat.html" title="Khách sạn Đà Lạt">Khách sạn Đà Lạt</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  @include('partials.footer')

  @include('partials.modal')

    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });

        function yy(){
          $.ajax({
            url: '/dele',
            method: 'get',
            success: function () {
                // console.log(response);
                $( '#items' ).html('Chưa có lịch sử tìm kiếm');
            },error: function(xhr, ajaxOptions, thrownError){
                    console.log(xhr.status+" ,"+" "+ajaxOptions+", "+thrownError);
            }
          }); 
        }
    </script>
</html>
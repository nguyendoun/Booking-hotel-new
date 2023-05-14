@extends('layouts.master')

@section('title', 'Thanh toán')
@section('styles')
    <style>
        .fullscreen{
           padding-top: 50px;
        }
        body {
                font-family: 'Nunito', sans-serif;
            }
            
            .form-input{
                border: 1px solid rgb(99, 97, 97);
                height: 50px;
                border-radius:4px;
                width: 100%;
                padding-left: 20px;
                transition: 0.25s ease;
                
            }
            .form-input:focus{
                border-color: black;
                
            }
            .form-field{
                position: relative;
                margin-top: 15px;
            }
            .form-label{
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                left: 21px;
                user-select: none;
                color: rgb(172, 161, 161);
                pointer-events: none;
                transition: 0.25s ease;
            }
            .form-input:not(:placeholder-shown) + .form-label,
            .form-input:focus + .form-label{
                top: 0;
                left: 11px;
                padding: 0 10px;
                display: inline-block;
                background-color:white;
                color: black;
                
            }
            .form-input:not(:placeholder-shown){
                  /* border: 1px solid black; */
            }
            
            

    </style>
@stop

@section('content')
                <div class="containerr" style="height: 50px; position: fixed;z-index: 1001;">
                    <header class="caidau">
                        <nav style=" width: 100%; height: 50px;">
                            <div class="wrapper">
                                <div class="menu nav__pc">
                                    <div class="logo">
                                        <a href="{{ route('home.index')}}" style="color: #241a71;">Booking<span>Hotel</span>.vn</a>
                                    </div>
                                </div>
                                </div>
                                

                                <div class="menu__mobile">
                                <div class="logo">Booking <span>Hotel</span>.vn</div>
                                </div>
                                


                                <label for="nav-mobile-input" class="nav__bars-btn">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                                </label>
                                
                                <input type="checkbox" class="nav__input" name="" id="nav-mobile-input" hidden>

                                <label for="nav-mobile-input" class="nav__overlay"></label>

                                <div class="nav__mobile">
                                <label for="nav-mobile-input" class="nav__mobile-close">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
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
                                    <div class="MuiBox-root jss5221" style="display: flex; align-items: center;"><svg width="17" height="17" fill="none"><path d="M3.167 1.333H6.5L8.167 5.5 6.083 6.75a9.167 9.167 0 004.167 4.167l1.25-2.084 4.167 1.667v3.333A1.666 1.666 0 0114 15.5 13.333 13.333 0 011.5 3a1.667 1.667 0 011.667-1.667" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg><div class="MuiBox-root jss5222 jss5214"><p style="margin-bottom: 0px;" class="MuiTypography-root jss5213 MuiTypography-body2">Hotline</p><p style="font-weight: 600;margin-bottom: 0px;">1900 1001</p></div></div>
                                </div>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="clearfix"></div>

                <div class="fullscreen" style="    display: flex;">
                    <div class="container-free" style="display: flex;width: 1180px;margin: 0 auto;">
                        <div class="forminfor" style="width:60%;margin-bottom: 10px;">
                            <div class="" style="width: 100%;display: flex;padding: 24px;background: white;margin-top: 12px;border-radius: 8px;">
                                <div class="" style="width: 112px;height: 112px;margin-right: 16px;">
                                    <div class="" style="    width: 100%;height: 100%;position: relative;">
                                        <div class="" style="border-radius: 0px;top: 0;left: 0;right: 0;width: 100%;bottom: 0;height: 100%;/* display: flex; *//* opacity: 1; *//* z-index: 1; */position: absolute;/* transition: opacity 500ms; *//* align-items: center; *//* justify-content: center; *//* background-color: #EDF2F7; *//* opacity: 0; *//* transition: opacity 500ms; */"></div>
                                        <div class=" " style="height: 100%;">
                                            <img style="width:100%;top: 0;left: 0;width: 100%;height: 100%;position: absolute;border-radius: 8px;object-fit: cover;" src="images/hotels/{{ $hotel->first()->image }}" class="jss2421" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="" style="font-size: 18px;font-weight: 600;line-height: 21px;margin-bottom: 10px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;">{{ $hotel->first()->name }}</p>
                                    <div class="" style="display: flex;align-items: center;line-height: 2px;">
                                        <div class="" style="display: flex;margin-top: 5px;margin-bottom: 7px;margin: 6px 0 8px 0;">
                                        @for ($i=0; $i < $hotel->first()->star; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                        @endfor
                                        </div>
                                        <div class="" style="color: #FF3366;border: 1px solid #FF3366;height: 22px;display: flex;padding: 2px 4px;font-size: 12px;align-items: center;line-height: 14px;margin-left: 6px;white-space: nowrap;border-radius: 4px;justify-content: center;">
                                            <span>{{ $hotel->first()->category->category }}</span>
                                        </div>
                                    </div>
                                    <div class="" style="display: flex;margin-top: 16px;">
                                        <div class="" style="display: flex;padding: 0 10px;border-left: solid 1px #E2E8F0;margin-right: 30px;flex-direction: column;">
                                            <p class="" style="margin-bottom: 0px;margin-bottom: 0px;font-size: 14px;margin-top: 6px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: normal;line-height: 17px;">Nhận phòng</p>
                                            <p class=""  style="margin-bottom: 0px;font-size: 14px;margin-top: 6px;line-height: 17px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;">
                                            @foreach ($bookings as $booking)
                                                {{ $booking["startDate"] }}
                                            @endforeach
                                            </p>
                                        </div>
                                        <div class="" style="display: flex;padding: 0 10px;border-left: solid 1px #E2E8F0;margin-right: 30px;flex-direction: column;">
                                            <p class=""  style="margin-bottom: 0px;margin-bottom: 0px;font-size: 14px;margin-top: 6px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: normal;line-height: 17px;">Trả phòng</p>
                                            <p class=""  style="margin-bottom: 0px;font-size: 14px;margin-top: 6px;line-height: 17px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;"> 
                                            @foreach ($bookings as $booking)
                                                {{ $booking["endDate"] }}
                                            @endforeach</p>
                                        </div>
                                        <div class="" style="display: flex;padding: 0 10px;border-left: solid 1px #E2E8F0;margin-right: 30px;flex-direction: column;">
                                            <p class=""  style="margin-bottom: 0px;margin-bottom: 0px;font-size: 14px;margin-top: 6px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: normal;line-height: 17px;">Số đêm</p>
                                            <p class=""  style="margin-bottom: 0px;font-size: 14px;margin-top: 6px;line-height: 17px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;">{{ $days }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <form action="{{ route('thanhtoan') }}"  method="GET">
                                @foreach ($bookings as $booking)
                                <input type="text" hidden aria-invalid="" name="roomid" value="{{ $booking["roomid"] }}" class="">
                                <input type="number" hidden aria-invalid="" name="qty" value="{{ $booking["qty"] }}" class="">
                                <input type="number" hidden aria-invalid="" name="subtotal" value="{{ $booking["subtotal"] }}" class="">
                                <input type="date" hidden aria-invalid="" name="startDate" value="{{ $booking["startDate"] }}" class="">
                                <input type="date" hidden aria-invalid="" name="endDate" value="{{ $booking["endDate"] }}" class="">
                                @endforeach
                                @if(Auth::check())
                                <div>
                                    <div class="inforcontact form" style="height: 250px;width: 100%;padding: 24px;background: white;margin-top: 12px;border-radius: 8px;">
                                        <p class="">Thông tin liên hệ</p>
                                        <div class="form-field">
                                            <input type="text" name="name" class="form-input" placeholder=" " required value="{{$name}}">
                                            <label for="name" class="form-label">Họ tên<span style="color:red">*</span></label>
                                        </div>
                                        <div class="form-field" style="width: 50%;padding-right: 5px;float: left;">
                                            <input type="email" name="email" class="form-input" placeholder=" " required value="{{$email}}">
                                            <label for="email" class="form-label">Email<span style="color:red">*</span></label>
                                        </div>
                                        <div class="form-field" style="width: 50%;float: right;padding-left: 5px;">
                                            <input type="text" name="phone" class="form-input" placeholder=" " required value="{{$phone}}">
                                            <label for="phone" class="form-label">Số điện thoại<span style="color:red">*</span></label>
                                        </div>
                                    </div>   
                                    <div style="display: flex;flex-direction: column;width: 100%;padding: 24px;font-size: 14px;background: white;margin-top: 12px;line-height: 17px;border-radius: 8px;">
                                        <label  data-shrink="false">
                                            <span style="font-size: 18px;font-weight: 600;line-height: 21px;margin-bottom: 16px;">yêu cầu đặt biệt
                                        </label>
                                        <div style="margin-top:0">
                                            <textarea name="note" class="form-control" id="validationTextarea" placeholder="Yêu cầu hoặc lưu ý??!!" style="    font-size: inherit;"></textarea>
                                        </div>
                                    </div>
                                    <div style="width: 100%;background: white;margin-top: 12px;border-radius: 8px;padding: 24px;">
                                        <label  data-shrink="false">
                                            <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">code
                                        </label>
                                        <input type="text" aria-invalid="" name="code" value="{{ $code }}" class="">
                                    </div>
                                    <div style="width: 100%;padding: 24px;background: white;margin-top: 12px;border-radius: 8px;">
                                        <p style="color: #ED8936;padding: 12px;font-size: 14px;background: rgba(237, 137, 54, 0.1);line-height: 22px;border-radius: 8px; margin-bottom: 16px;">Chúng tôi sẽ chủ động liên hệ với quý khách trong vòng 30 phút để xác nhận phòng trống và hướng dẫn thanh toán.</p>
                                        <div style="    display: flex;align-items: flex-end;flex-direction: column;">
                                             <input type="submit" value="Gửi yêu cầu đặt phòng" style="border: none;height: 48px;margin: 0px;padding: 14px 40px;min-height: 20px;margin: 12px 0;width: auto;color: white;font-weight: 600;border-radius: 8px;background-color: rgb(243 142 17);">
                                             <p  style=" margin-bottom: 0;    font-size: 14px;">Bằng cách nhấn nút Thanh toán, bạn đồng ý với</p>
                                             <p style=" margin-bottom: 0;    font-size: 14px;"><a href="/news/135157-dieu-kien-va-dieu-khoan.html" style="color:#00B6F3" target="_blank">Điều kiện và điều khoản</a> <!-- -->của chúng tôi</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                @else
                                <div>
                                    <div class="inforcontact form" style="height: 250px;width: 100%;padding: 24px;background: white;margin-top: 12px;border-radius: 8px;">
                                        <p class="" style="font-family: sans-serif;font-size: 18px;font-weight: 600;line-height: 21px;margin-bottom: 10px;">Thông tin liên hệ</p>
                                        <div>
                                            <p class="" style="display: flex;padding: 10px 14px;font-size: 14px;background: rgba(0, 182, 243, 0.1);align-items: center;line-height: 17px;border-radius: 8px;margin-bottom: 12px;">
                                                <svg width="20" height="20" fill="none" class="svgFillAll" style="stroke: rgb(0, 182, 243);"><path d="M3.63 15.374a12.905 12.905 0 016.37-1.67 12.9 12.9 0 016.37 1.67m-3.592-7.226a2.778 2.778 0 11-5.556 0 2.778 2.778 0 015.556 0zM18.333 10a8.333 8.333 0 11-16.665 0 8.333 8.333 0 0116.665 0z" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>&nbsp;
                                                <span style="color: rgb(0, 182, 243); cursor: pointer;">
                                                    <a href="#" data-toggle="modal" data-target="#login">Đăng nhập</a>
                                                </span>&nbsp;
                                                <span>để đặt phòng nhanh hơn, không cần nhập thông tin!</span>
                                            </p>
                                        </div>
                                        {{-- <div  style="margin-top:0">
                                            <label data-shrink="false">
                                                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Họ tên
                                                    <span style="color:red">*</span>
                                                </span>
                                            </label>
                                            <div class="">
                                            <input type="text" aria-invalid="" name="name" value="" class="">
                                            </div>
                                        </div>
                                        <div  style="width:49%">
                                            <label  data-shrink="false">
                                                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Số điện thoại
                                                    <span style="color:red">*</span>
                                                </span>
                                            </label>
                                            <div class="">
                                                <input type="text" aria-invalid="" name="phone" value="" class="">
                                            </div>
                                        </div>
                                        <div style="width:49%;margin-left:2%">
                                            <label  data-shrink="false">
                                                <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">Email
                                                    <span style="color:red">*</span>
                                                </span>
                                            </label>
                                            <div class="">
                                                <input type="email" aria-invalid="" name="email" value="" class="">
                                            </div>
                                        </div> --}}
                                        <div class="form-field">
                                            <input type="text" name="name" class="form-input" placeholder=" " required>
                                            <label for="name" class="form-label">Họ tên<span style="color:red">*</span></label>
                                        </div>
                                        <div class="form-field" style="width: 50%;padding-right: 5px;float: left;">
                                            <input type="email" name="email" class="form-input" placeholder=" " required>
                                            <label for="email" class="form-label">Email<span style="color:red">*</span></label>
                                        </div>
                                        <div class="form-field" style="width: 50%;float: right;padding-left: 5px;">
                                            <input type="text" name="phone" class="form-input" placeholder=" " required>
                                            <label for="phone" class="form-label">Số điện thoại<span style="color:red">*</span></label>
                                        </div>
                                    </div>

                                    <div style="display: flex;flex-direction: column;width: 100%;padding: 24px;font-size: 14px;background: white;margin-top: 12px;line-height: 17px;border-radius: 8px;">
                                        <label  data-shrink="false">
                                            <span style="font-size: 18px;font-weight: 600;line-height: 21px;margin-bottom: 16px;">yêu cầu đặt biệt
                                        </label>
                                        <div style="margin-top:0">
                                            <textarea name="note" class="form-control" id="validationTextarea" placeholder="Yêu cầu hoặc lưu ý??!!" style="    font-size: inherit;"></textarea>
                                        </div>
                                    </div>
                                    <div style="width: 100%;background: white;margin-top: 12px;border-radius: 8px;padding: 24px;">
                                        <label  data-shrink="false">
                                            <span style="font-size:16px;font-weight:400;line-height:19px;color:#718096">code
                                        </label>
                                        <input type="text" aria-invalid="" name="code" value="{{ $code }}" class="">
                                    </div>
                                    <div style="width: 100%;padding: 24px;background: white;margin-top: 12px;border-radius: 8px;">
                                        <p style="color: #ED8936;padding: 12px;font-size: 14px;background: rgba(237, 137, 54, 0.1);line-height: 22px;border-radius: 8px; margin-bottom: 16px;">Chúng tôi sẽ chủ động liên hệ với quý khách trong vòng 30 phút để xác nhận phòng trống và hướng dẫn thanh toán.</p>
                                        <div style="    display: flex;align-items: flex-end;flex-direction: column;">
                                             <input type="submit" value="Gửi yêu cầu đặt phòng" style="border: none;height: 48px;margin: 0px;padding: 14px 40px;min-height: 20px;margin: 12px 0;width: auto;color: white;font-weight: 600;border-radius: 8px;background-color: rgb(243 142 17);">
                                             <p  style=" margin-bottom: 0;    font-size: 14px;">Bằng cách nhấn nút Thanh toán, bạn đồng ý với</p>
                                             <p style=" margin-bottom: 0;    font-size: 14px;"><a href="/news/135157-dieu-kien-va-dieu-khoan.html" style="color:#00B6F3" target="_blank">Điều kiện và điều khoản</a> <!-- -->của chúng tôi</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                @endif
                            </form>
                        </div>

                        <div class="bill" style="margin: 10px;top: 60px;width:40%;height: 100%;border: 1px solid #EDF2F7;display: flex;position: sticky;background: #FFFFFF;border-radius: 8px;flex-direction: column;height: 670px;">
                            <div>
                                <div class="" style="width: 100%;display: flex;padding: 40px 24px 0 24px;margin-top: -12px;border-radius: 12px;flex-direction: column;">
                                    <div class="" style="    height: 114px;position: relative;object-fit: cover;border-radius: 8px;">
                                       
                                        <img src="images/rooms/{{ $rooms->first()->images->first()->path}}" borderradiusprop="8px" style="    width: 100%;height: 114px;position: relative;object-fit: cover;border-radius: 8px;">
                                        
                                    </div>
                                    <div class="MuiBox-root jss268 jss248" style="font-size: 14px;margin-top: 8px;font-weight: 400;line-height: 16px;">
                                        <div class="MuiBox-root jss269 jss249 jss194" style="color: #1a202c;display: flex;font-size: 18px;max-height: 40px;font-weight: 600;line-height: 21px;">
                                            <span class="MuiTypography-root MuiTypography-subtitle1" style="margin-right: 3px;">
                                            @foreach ($bookings as $booking)
                                                x{{ $booking["qty"] }}
                                            @endforeach
                                            </span>
                                            <h6 class="MuiTypography-root MuiTypography-subtitle1" title="Resort Classic Room (King/Twin)">
                                                <span style="font-size: 18px; line-height: 21px; font-weight: 600; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">phòng {{$rooms->first()->roomType->type}} </span>
                                            </h6>
                                        </div>
                                        <div class="MuiBox-root jss270 jss250 jss200" style="display: flex;align-items: center;">
                                             <div class="MuiBox-root jss273 jss200" style="/* margin-top: 10px; */display: flex;">
                                                <div class="MuiBox-root jss274" style="width: 16px; height: 16px;">
                                                    <svg width="16" height="16" fill="none" class="jss240" style=""><path d="M2.667 7.556V6.222a.889.889 0 01.888-.889h3.556a.889.889 0 01.889.89v1.333" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 7.556V6.222a.889.889 0 01.889-.889h3.555a.889.889 0 01.89.89v1.333" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.518 7.556h10.963a1.185 1.185 0 011.186 1.185v2.815H1.333V8.74a1.185 1.185 0 011.185-1.185v0zM1.333 11.556v1.777M14.666 11.556v1.777" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 7.556v-4a.889.889 0 00-.889-.89H3.555a.889.889 0 00-.889.89v4" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </div>
                                                <div class="MuiBox-root jss275" style="margin-left: 8px;">{{$rooms->first()->roomType->bed}} giường {{$rooms->first()->roomType->size}}</div>
                                            </div>
                                            <svg width="16" height="16" fill="none" style="margin-left: 20px;"><path d="M8 9.333a1.333 1.333 0 100-2.666 1.333 1.333 0 000 2.666z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.667 8c-1.778 3.111-4 4.667-6.667 4.667S3.11 11.11 1.333 8c1.778-3.111 4-4.667 6.667-4.667S12.889 4.89 14.667 8z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="MuiBox-root jss272 jss267" style="margin-left: 8px;">{{$rooms->first()->view}}</div>
                                        </div>
                                       
                                        <div class="MuiBox-root jss276" style="display: flex;align-items: center;margin-top: 10px;cursor: pointer;/* margin-top: 10px; */">
                                            <svg width="16" height="16" fill="none"><path d="M13.444 6.111H5.667c-.86 0-1.556.696-1.556 1.556v4.666c0 .86.697 1.556 1.556 1.556h7.777c.86 0 1.556-.697 1.556-1.556V7.667c0-.86-.697-1.556-1.556-1.556z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.556 11.555a1.556 1.556 0 100-3.11 1.556 1.556 0 000 3.11zM11.889 6.111V4.556A1.556 1.556 0 0010.333 3H2.556A1.556 1.556 0 001 4.556v4.666a1.555 1.555 0 001.556 1.556H4.11" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <p style="margin-bottom: 0;margin-left: 8px;">
                                                @if($rooms->first()->service == "Hoàn hủy miễn phí")
                                                    hỗ trợ hoàn hủy miễn phí
                                                @else
                                                    Không hỗ trợ hoàn huỷ
                                                @endif
                                            </p>
                                        </div>
                                         @if($rooms->first()->service == "Bữa sáng miễn phí")
                                        <div class="MuiBox-root jss277 jss237" style="display: flex;margin-top: 10px;">
                                            <svg width="16" height="16" fill="none"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <p style="margin-bottom: 0;margin-left: 8px;color: #48BB78;">                                                
                                                    {{$rooms->first()->service}}
                                            </p>
                                        </div>
                                         @endif
                                        <div class="MuiBox-root jss278 jss237" style="display: flex;margin-top: 10px;">
                                            <div class="MuiBox-root jss279" style="width: 16px; height: 16px;"> 
                                                <svg width="16" height="16" fill="none"><path d="M12.739 6.478L6.652 15l1.217-5.478H3L9.087 1 7.87 6.478h4.87z" stroke="#ED8936" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </div>
                                            <p style="color: rgb(237, 137, 54);margin-bottom: 0;margin-left: 8px;">Xác nhận trong 30 phút</p>
                                        </div>
                                        <div class="MuiBox-root jss280 jss264" style="margin-top: 10px;color: #48BB78;display: flex;align-items: center;">
                                            <svg width="16" height="16" fill="none" style="margin-right: 6px;"><path d="M13 8.333c0-.92.747-1.666 1.667-1.666V6c0-2.667-.667-3.333-3.333-3.333H4.667C2 2.667 1.334 3.333 1.334 6v.333a1.667 1.667 0 010 3.334V10c0 2.667.666 3.333 3.333 3.333h6.667c2.666 0 3.333-.666 3.333-3.333C13.747 10 13 9.253 13 8.333z" stroke="#48BB78" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.667 8l1.667 1.667 3.333-3.334" stroke="#48BB78" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <span style="display: flex;align-items: center;">Mã 
                                                <span class="MuiTypography-root jss262 MuiTypography-subtitle2" style="border: 1px dashed rgba(72, 187, 120, 0.5);padding: 2px 4px;background: #EDF8F1;font-weight: 600;margin-left: 5px;border-radius: 3px;">{{$code}}</span>
                                                <div class="MuiBox-root jss282" style="margin-left: 5px; white-space: nowrap; font-size: 14px; line-height: 16px; font-weight: 400;"> giảm  {{$reduction}}%
                                                    <span class="MuiBox-root jss283"> đã được áp dụng</span>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root jss205 jss195" style="color: #00B6F3;font-size: 14px;background: #E5F8FE;margin-top: 12px;font-weight: 400;line-height: 16px;border-radius: 8px;"></div>
                                    <div class="MuiBox-root jss5329 jss5248 jss5249" style="color: #FF3366;background: #FFE7F3;font-weight: 400;line-height: 20px;">
                                        <div class="MuiBox-root jss5330" style="display: flex;padding: 8px 0px 7px;align-items: center;">
                                            <div class="MuiBox-root jss5331">
                                                <svg width="16" height="16" fill="none" class="svgFillAll jss5252" style="margin: 0 10px 0 14px;"><path d="M3.333 8l3.334 3.333 6.666-6.666" stroke="#FF1284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </div>
                                            <div class="MuiBox-root jss5332" style="margin-left: 2px;">Phòng trống sẽ được xác nhận sớm.</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 100%;height: 4px;margin: 12px 0;background: #EDF2F7;"></div>
                                <div class="" style="width: 100%;display: flex;padding: 40px 24px 0 24px;margin-top: -12px;border-radius: 12px;flex-direction: column;">
                                    <div class="MuiBox-root jss6681 jss6665" style="color: #1a202c;display: flex;font-size: 14px;flex-direction: column;">
                                        <div class="MuiBox-root jss6682 jss6666" style="display: flex;padding: 14px 0 12px;position: relative;font-size: 14px;font-weight: 400;line-height: 16px;border-bottom: 1px solid #EDF2F7;justify-content: space-between;">
                                            <span class="MuiBox-root jss6683">1 phòng x {{ $days}} đêm
                                                <svg width="10" height="6" fill="none" class="svgFillAll jss6676"><path d="M1 1l4 4 4-4" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            </span>
                                            <span class="MuiBox-root jss6684 jss6673" style="font-size: 14px;text-align: right;font-weight: 400;line-height: 16px;">
                                                <span class="MuiBox-root jss6685">
                                                @foreach ($bookings as $booking)
                                                    {{ number_format($booking['subtotal']*$days) }}đ
                                                @endforeach
                                                </span>
                                                <div class="MuiBox-root jss6686 jss6670" style="display: flex;margin-top: 3px;align-items: center;">
                                                    <div class="MuiBox-root jss6687 jss6671" style="color: #ffffff;padding: 1px 3px;font-size: 12px;background: #FF3366;font-weight: 600;line-height: 14px;border-radius: 4px;">-{{$rooms->first()->discount}}%</div>
                                                    <div class="MuiBox-root jss6688 jss6672" style="color: #718096;font-size: 12px;font-weight: 400;line-height: 14px;margin-left: 6px;text-decoration: line-through;">{{number_format($rooms->first()->price*$days)}}</div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="MuiBox-root jss6689 jss6666" style="display: flex;padding: 14px 0 12px;position: relative;font-size: 14px;font-weight: 400;line-height: 16px;border-bottom: 1px solid #EDF2F7;justify-content: space-between;">
                                            <span class="MuiBox-root jss6690"> 
                                                @foreach ($bookings as $booking)
                                                    {{ $booking['qty'] }}
                                                @endforeach
                                                phòng x {{ $days}} đêm 
                                            </span>
                                            @foreach ($bookings as $booking)
                                                    {{ number_format($booking['subtotal']*$days*$booking['qty']) }}đ
                                            @endforeach
                                        </div>
                                        <div class="MuiBox-root jss6689 jss6666" style="display: flex;padding: 14px 0 12px;position: relative;font-size: 14px;font-weight: 400;line-height: 16px;border-bottom: 1px solid #EDF2F7;justify-content: space-between;">
                                            <span class="MuiBox-root jss6690"> 
                                                giảm {{$reduction}}%
                                            </span>
                                            @foreach ($bookings as $booking)
                                                    {{ number_format($booking['subtotal']*$days*$booking['qty']-($booking['subtotal']*$days*$booking['qty'])*$reduction/100) }}đ
                                            @endforeach
                                        </div>
                                        
                                        <div class="MuiBox-root jss6693 jss6667" style="display: flex;font-weight: 600;line-height: 17px;padding-top: 14px;justify-content: space-between;">
                                            <span class="MuiBox-root jss6694">Tổng tiền thanh toán</span>
                                            <span class="MuiBox-root jss6695" style="text-align: right;">
                                            @foreach ($bookings as $booking)
                                                    {{ number_format($booking['subtotal']*$days*$booking['qty']-($booking['subtotal']*$days*$booking['qty'])*$reduction/100) }}đ
                                            @endforeach
                                        </div>
                                        <div class="MuiBox-root jss6696 jss6674" style="color: #718096;font-size: 12px;margin-top: 2px;font-weight: 400;line-height: 14px;padding-bottom: 14px;">Đã bao gồm thuế, phí, VAT</div>
                                        <div class="MuiBox-root jss6697 jss6679" style="color: #FF3366;display: flex;background: #FFE7F3;align-items: center;border-radius: 8px;margin-bottom: 24px;">
                                            <div class="MuiBox-root jss6698" style="padding: 6px;">
                                                <div class="jss2418 jss6680">
                                                    <div class="jss2419 jss2422" style="border-radius: 0px;"></div>
                                                    <div class="lazyload-wrapper ">
                                                        <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_piggy_dollar.svg" class="jss2421 jss6680" alt="">
                                                    </div>
                                                </div>
                                            </div>Chúc mừng! Bạn đã tiết kiệm được 
                                            <div class="MuiBox-root jss6699" style="font-weight: 600;">&nbsp;
                                                @foreach ($bookings as $booking)
                                                    {{ number_format(($rooms->first()->price*$days*$booking['qty'])-($booking['subtotal']*$days*$booking['qty']-($booking['subtotal']*$days*$booking['qty'])*$reduction/100)) }}đ
                                                @endforeach
                                                đ 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="MuiBox-root jss2595 jss2588" style="width: 100%;background: #F7FAFC;padding-top: 24px;padding-bottom: 24px;"><div class="MuiBox-root jss2596 jss2589" style="width: 100%;margin: 0 auto;max-width: 1188px;"><div class="MuiBox-root jss2597 jss2591" style="text-align: center;"><p class="MuiTypography-root jss2590 MuiTypography-body2" style="color: #4A5568;font-size: 12px;line-height: 24px;">BookingHotel.vn là thành viên của <strong>hư cấu</strong> VNTravel Group - Một trong những tập đoàn đứng đầu Đông Nam Á về du lịch trực tuyến và các dịch vụ liên quan.</p><div class="MuiBox-root jss2598 jss2592" style="margin: 12px 0 20px 0;display: flex;align-items: center;justify-content: center;"><div class="jss2430 jss2594"><div class="jss2431 jss2434" style="border-radius: 0px;"></div><div class="lazyload-wrapper "><img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_company_group.svg" class="jss2433 jss2594" alt=""></div></div></div><p class="MuiTypography-root jss2590 MuiTypography-body2" style="color: #4A5568;font-size: 12px;line-height: 24px;">Copyright © 2020 - CÔNG TY CỔ PHẦN DU LỊCH VIỆT NAM VNTRAVEL - Đăng ký kinh doanh số 0108886908 - do Sở Kế hoạch và Đầu tư thành phố Hà Nội cấp lần đầu ngày 04 tháng 09 năm 2019</p></div></div></div>
            </div>

@stop


@section('scripts')
        <script>
            @if( $errors->has('email')|| $errors->has('password') || $errors->has('phone'))
                $('#register').modal('show');
            @endif
            </script> 
            <script >
            @if(session()->has('error'))
                $('#login').modal('show');
            @endif
        </script>   
        {{-- slider --}}
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
        <script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
        <script>
            $('#lightSlider').lightSlider({
                gallery: true,
                item: 1,
                loop: true,
                slideMargin: 0,
                thumbItem: 5
            });
        </script>

@stop

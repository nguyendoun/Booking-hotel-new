@extends('layouts.booking')

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

                <div class="fullscreen" style="">
                    <div class="MuiBox-root jss45 jss2" style="
    margin: 0 auto;
    display: flex;
    padding: 32px 0;
    max-width: 630px;
    background: transparent;
    flex-direction: column;
">
                        <div class="MuiBox-root jss46 jss3" style="
    width: 100%;
    position: relative;
    background: white;
    border-top: solid 4px #48BB78;
    border-radius: 8px;
">
                            <div class="MuiBox-root jss47 jss4" style="
    padding: 16px 24px 0 24px;
">
                                <div class="MuiBox-root jss48" style="
    padding-bottom: 12px;
">
                                    <div class="MuiBox-root jss49" style="
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                    ">
                                        
                                        <div class="MuiBox-root jss50" style="text-align: center;font-size: 14px;display: flex;align-items: center;flex-direction: column;">
                                            <svg width="64" height="64" fill="none"><g clip-path="url(#icon_payment_settled_hotel_svg__clip0)"><path d="M32 64c17.673 0 32-14.327 32-32C64 14.327 49.673 0 32 0 14.327 0 0 14.327 0 32c0 17.673 14.327 32 32 32z" fill="url(#icon_payment_settled_hotel_svg__paint0_linear)"></path><path d="M23.823 46.435L40.278 62.89C53.905 59.255 64 46.84 64 32v-.908L51.079 19.18 23.823 46.435z" fill="#37A866"></path><path d="M32.808 39.167c1.413 1.414 1.413 3.836 0 5.25l-2.928 2.927c-1.413 1.413-3.836 1.413-5.249 0l-12.82-12.921c-1.413-1.413-1.413-3.836 0-5.25l2.927-2.927c1.414-1.413 3.836-1.413 5.25 0l12.82 12.921z" fill="url(#icon_payment_settled_hotel_svg__paint1_linear)"></path><path d="M44.013 16.858c1.413-1.413 3.836-1.413 5.249 0l2.927 2.928c1.413 1.413 1.413 3.836 0 5.249L29.981 47.142c-1.413 1.413-3.836 1.413-5.25 0l-2.927-2.927c-1.413-1.414-1.413-3.836 0-5.25l22.209-22.107z" fill="url(#icon_payment_settled_hotel_svg__paint2_linear)"></path></g><defs><linearGradient id="icon_payment_settled_hotel_svg__paint0_linear" x1="19" y1="3" x2="45.5" y2="61" gradientUnits="userSpaceOnUse"><stop stop-color="#5BDC91"></stop><stop offset="1" stop-color="#34AC66"></stop></linearGradient><linearGradient id="icon_payment_settled_hotel_svg__paint1_linear" x1="32" y1="22.5" x2="32" y2="45.5" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#B1EFCB"></stop></linearGradient><linearGradient id="icon_payment_settled_hotel_svg__paint2_linear" x1="32" y1="22.5" x2="32" y2="45.5" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#B1EFCB"></stop></linearGradient><clipPath id="icon_payment_settled_hotel_svg__clip0"><path fill="#fff" d="M0 0h64v64H0z"></path></clipPath></defs></svg>
                                            <span class="MuiBox-root jss51" style="
    padding: 12px 0px 8px;
    font-size: 16px;
    font-weight: 600;
    line-height: 19px;
">Gửi yêu cầu đặt phòng thành công</span>
                                            
                                        </div>
                                        <div style="margin: 10px; font-weight: 600;">Mã đơn hàng: {{$order_code}}</div>
                                        <div class="MuiBox-root jss53" style="
    font-size: 14px;
    line-height: 16px;
    padding-top: 12px;
">Chúng tôi sẽ chủ động liên hệ với quý khách trong vòng 30 phút để xác nhận phòng trống và hướng dẫn thanh toán.</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="MuiDivider-root">
                            <div class="MuiBox-root jss54 jss4" style="padding: 16px 24px 0 24px;">
                                <div class="MuiBox-root jss82 jss55" style="margin: 16px 0;">
                                    <div class="MuiBox-root jss83 jss59">
                                        <div class="MuiBox-root jss84">
                                            <div class="MuiBox-root jss85">
                                                <h6 class="MuiTypography-root jss57 MuiTypography-subtitle1" style="display: flex;font-size: 16px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: 600;line-height: 20px;flex-direction: column;">{{$rooms->first()->hotel->name}}</h6>
                                                <div class="MuiBox-root jss86" style="display: flex;margin-top: 8px;align-items: center;">
                                                    <div class="MuiBox-root jss92 jss87 jss81">
                                                        <div class="MuiBox-root jss95" title="Số sao đánh giá này do nơi lưu trú cung cấp, phản ánh sự thoải mái, cơ sở vật chất và tiện nghi mà khách hàng có thể mong đợi.">
                                                            <div class="MuiBox-root jss98 jss96">
                                                                @for ($i=0; $i < $rooms->first()->hotel->star; $i++)
                                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" role="img" viewBox="0 0 576 512" style="height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" style="color: #f38e11;"/></svg>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="MuiBox-root jss99 jss90" style="color: #FF3366;border: 1px solid #FF3366; height: 22px;display: flex;padding: 2px 4px;font-size: 12px;align-items: center;line-height: 14px;margin-left: 6px;white-space: nowrap;border-radius: 4px;justify-content: center;">
                                                        <span style="">Khu nghỉ dưỡng</span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root jss100 jss66" style="display: flex;align-items: center;border-bottom: 1px solid #EDF2F7; display: flex;align-items: center;border-bottom: 1px solid #EDF2F7;">
                                        <div class="MuiBox-root jss101" xs="5">
                                            <p class="MuiTypography-root jss67 MuiTypography-body1" style="color: #4A5568;font-size: 14px;margin-top: 12px;font-weight: 600;line-height: 17px;margin-bottom: 0px;">Nhận phòng</p>
                                            <p class="MuiTypography-root jss70 MuiTypography-body1" style="color: #1a202c;font-size: 14px;font-weight: 400;margin-bottom: 0;">
                                                <span class="MuiBox-root jss102"> {{ $startDate}}</span>
                                            </p>
                                            <p class="MuiTypography-root jss70 MuiTypography-body1" style="color: rgb(74, 85, 104); margin: 2px 0px 16px; font-weight: 400;">14:00</p>
                                        </div>
                                        <div class="MuiBox-root jss103 jss69" xs="5" style="text-align: left;margin-left: 40px;">
                                            <p class="MuiTypography-root jss67 MuiTypography-body1" style="color: #4A5568; font-size: 14px;margin-top: 12px;font-weight: 600;line-height: 17px;margin-bottom: 0px;">Trả phòng</p>
                                            <p class="MuiTypography-root jss70 MuiTypography-body1" style="color: #1a202c;font-size: 14px;font-weight: 400;margin-bottom: 0;line-height: 17px;">
                                                <span class="MuiBox-root jss104">{{ $endDate}}</span>
                                            </p>
                                            <p class="MuiTypography-root jss70 MuiTypography-body1" style="color: rgb(74, 85, 104); margin: 2px 0px 16px; font-weight: 400;">12:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiBox-root jss105 jss4" style="padding-top: 0px;padding: 0px 24px 30px 24px;">
                                <div class="MuiBox-root jss153 jss106" style="display: flex;border-bottom: 1px solid #EDF2F7;justify-content: space-between;">
                                    <div class="MuiBox-root jss154 jss107" style="border-bottom: 1px solid #EDF2F7;">
                                        <div class="MuiBox-root jss155 jss123" style="color: #1a202c;display: flex;align-items: center;">
                                            <span class="MuiTypography-root MuiTypography-subtitle1" style="margin-right: 3px;font-size: 16px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: 600;line-height: 20px;">{{$qty}}x</span>
                                            <h6 class="MuiTypography-root MuiTypography-subtitle1" style="
    font-size: 16px;
    font-family: -apple-system,BlinkMacSystemFont,sans-serif;
    font-weight: 600;
    line-height: 20px;
    margin-bottom: 0;">{{$rooms->first()->roomType->type}}</h6>
                                        </div>
                                        <div class="MuiBox-root jss158" style="margin-top: 10px;color: #1a202c;display: flex;align-items: center;">
                                            <svg width="16" height="16" fill="none" class="jss114"><path d="M2.667 7.556V6.222a.889.889 0 01.888-.889h3.556a.889.889 0 01.889.89v1.333" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 7.556V6.222a.889.889 0 01.889-.889h3.555a.889.889 0 01.89.89v1.333" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.518 7.556h10.963a1.185 1.185 0 011.186 1.185v2.815H1.333V8.74a1.185 1.185 0 011.185-1.185v0zM1.333 11.556v1.777M14.666 11.556v1.777" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 7.556v-4a.889.889 0 00-.889-.89H3.555a.889.889 0 00-.889.89v4" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <div class="MuiBox-root jss159 jss109" style="
    color: #4A5568;
    font-size: 14px;
    font-weight: normal;
    line-height: 17px;
    margin-left: 6px;
">{{$rooms->first()->roomType->bed}} giường {{$rooms->first()->roomType->size}}</div>
                                        </div>
                                        <div class="MuiBox-root jss160" style="display: flex;margin-top: 8px;align-items: center;">
                                            <svg width="16" height="16" fill="none"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <p class="MuiTypography-root jss109 jss110 MuiTypography-body1" style="
    margin-bottom: 0;
    color: #4A5568;
    font-size: 14px;
    font-weight: normal;
    line-height: 17px;
    margin-left: 6px;
"> {{$rooms->first()->service}}</p>
                                        </div>
                                        <div class="MuiBox-root jss161" style="display: flex;align-items: center;color: #1a202c;margin-top: 8px;">
                                            <svg width="16" height="16" fill="none"><path d="M13.444 6.111H5.667c-.86 0-1.556.696-1.556 1.556v4.666c0 .86.697 1.556 1.556 1.556h7.777c.86 0 1.556-.697 1.556-1.556V7.667c0-.86-.697-1.556-1.556-1.556z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.556 11.555a1.556 1.556 0 100-3.11 1.556 1.556 0 000 3.11zM11.889 6.111V4.556A1.556 1.556 0 0010.333 3H2.556A1.556 1.556 0 001 4.556v4.666a1.555 1.555 0 001.556 1.556H4.11" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                            <p class="MuiTypography-root jss109 MuiTypography-body1" style=" margin-bottom: 0;color: #4A5568;font-size: 14px;font-weight: normal;line-height: 17px;margin-left: 6px;">                                              
                                                @if($rooms->first()->service == "Hoàn hủy miễn phí")
                                                    hỗ trợ hoàn hủy miễn phí
                                                @else
                                                    Không hỗ trợ hoàn huỷ
                                                @endif</p>
                                        </div>
                                    </div>
                                    <div class="MuiBox-root jss162 jss132" style="
    width: 30%;
    height: 128px;
    margin-bottom: 20px;
">
                                        <div class="jss38 jss136" style="
    width: 100%;
    height: 100%;
    border-radius: 8px;
    position: relative;
">
                                            <div class="jss39 jss42" style="border-radius: 8px;top: 0;left: 0;right: 0;width: 100%;bottom: 0;height: 100%;display: flex;opacity: 1;z-index: 1;position: absolute;transition: opacity 500ms;align-items: center;justify-content: center;/* background-color: #EDF2F7; */"></div>
                                            <div class="lazyload-wrapper " style="
    height: 100%;
">
                                                <img src="images/rooms/{{ $rooms->first()->images->first()->path}}" class="jss41 jss136" alt="" style="top: 0;left: 0;width: 100%;height: 100%;border-radius: 8px;position: absolute;object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiBox-root jss163 jss133">
                                    <div class="MuiPaper-root MuiAccordion-root MuiAccordion-rounded jss164 MuiPaper-elevation1 MuiPaper-rounded">
                                        <div class="MuiGrid-root MuiGrid-container">
                                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-sm-10 MuiGrid-grid-md-10 MuiGrid-grid-lg-10">
                                                <div class="MuiButtonBase-root MuiAccordionSummary-root jss166" tabindex="0" role="button" aria-disabled="false" aria-expanded="false" aria-controls="panel1a-content" id="panel1a-header">
                                                    <div class="MuiAccordionSummary-content jss167">
                                                        <h6 class="MuiTypography-root MuiTypography-subtitle2">Tổng tiền</h6>
                                                    </div>                                                   
                                                </div>
                                                <div class="MuiBox-root jss170 jss152">Đã bao gồm thuế, phí, VAT</div>
                                            </div>
                                            <div class="MuiGrid-root jss149 MuiGrid-item MuiGrid-grid-sm-2 MuiGrid-grid-md-2 MuiGrid-grid-lg-2">
                                                <h6 class="MuiTypography-root MuiTypography-subtitle1">{{$total}}đ</h6>
                                            </div>
                                        </div>
                                        <div class="MuiCollapse-container MuiCollapse-hidden" style="min-height: 0px;">
                                            <div class="MuiCollapse-wrapper">
                                                <div class="MuiCollapse-wrapperInner">
                                                    <div role="region">
                                                        <div class="MuiAccordionDetails-root" style="padding: 0px;">
                                                            <div class="MuiBox-root jss171 jss138">
                                                                <div class="MuiBox-root jss6689 jss6666" style="display: flex;padding: 14px 0 12px;position: relative;font-size: 14px;font-weight: 400;line-height: 16px;border-bottom: 1px solid #EDF2F7;justify-content: space-between;">
                                                                    <span class="MuiBox-root jss6690"> 
                                                                        
                                                                            {{ $qty }}
                                                                        
                                                                        phòng x {{ $days}} đêm 
                                                                    </span>
                                                                   
                                                                            {{ number_format($subtotal*$days*$qty) }}đ
                                                                   
                                                                </div>
                                                                
                                                                {{-- <div class="MuiBox-root jss6689 jss6666" style="display: flex;padding: 14px 0 12px;position: relative;font-size: 14px;font-weight: 400;line-height: 16px;border-bottom: 1px solid #EDF2F7;justify-content: space-between;">
                                                                    <span class="MuiBox-root jss6690"> 
                                                                        giảm {{$reduction}}%
                                                                    </span>
                                                                    @foreach ($bookings as $booking)
                                                                            {{ number_format($booking['subtotal']*$days*$booking['qty']-($booking['subtotal']*$days*$booking['qty'])*$reduction/100) }}đ
                                                                    @endforeach
                                                                </div> --}}
                                                                <div class="MuiBox-root jss180 jss139">
                                                                    <span class="MuiBox-root jss181 jss146">Mã giảm giá </span>
                                                                    <div class="MuiBox-root jss182">
                                                                        <span class="MuiTypography-root jss145 MuiTypography-body1" style="color: rgb(72, 187, 120);">
                                                                           
                                                                            {{ number_format(($subtotal*$days*$qty)*$reduction/100) }}đ
                                                                   
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiBox-root jss183 jss5" style="display: flex;justify-content: space-around;">
                            @for ($i=0; $i < 20; $i++)
                            <div class="MuiBox-root jss184 jss6" style="width: 17px;height: 17px;transform: rotate(-45deg);background: #e7e7e7;margin-top: -9px;border-radius: 50%;border-left-color: transparent; border-bottom-color: transparent;"></div>
                            @endfor
                        </div>
                                    
                        <div class="MuiBox-root jss204" style="margin: 0px auto;display: flex;align-items: center;padding-top: 16px;justify-content: center;">
                                            <a class="MuiTypography-root MuiLink-root MuiLink-underlineHover MuiTypography-colorPrimary" href="{{ route('home.index')}}" style="margin: 0px auto; text-decoration: none;">
                                                <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss205 jss206" tabindex="0" type="button" style="color: rgb(255, 255, 255); width: fit-content;border: 1px solid rgb(243 142 17);height: 40px;margin: 0px;padding: 12px 50px;font-size: 14px;display: flex;min-height: 20px;font-weight: normal;border-radius: 8px;text-transform: none;background-color: rgb(243 142 17);align-items: center;">
                                                    <span class="MuiButton-label" style="width: 100%;display: inherit;align-items: inherit;justify-content: inherit;">
                                                        <div class="MuiBox-root jss207" style="display: flex;position: relative;align-items: center;justify-content: center;">
                                                            <div class="MuiBox-root jss208" opacity="1" style="display: flex;align-items: center;">
                                                                <h6 class="MuiTypography-root MuiTypography-subtitle2" style="font-size: 14px;font-family: -apple-system,BlinkMacSystemFont,sans-serif;font-weight: 600;line-height: 16px;margin: 0;">Quay lại trang chủ</h6>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <span class="MuiTouchRipple-root"></span>
                                                </button>
                                            </a>
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

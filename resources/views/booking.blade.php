@extends('layouts.header')
@section('main')
<br>
<!-- <nav class="bg-white">
    <div class="d-flex align-items-center">
        <div class="logo"> <a href="#" class="text-uppercase">shop</a> </div>
        <div class="ml-auto"> <a href="#" class="text-uppercase">Back to shopping</a> </div>
    </div>
</nav> -->
<div class="wrapper">
    
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
            <div id="address" class="bg-light rounded mt-3">
            <!-- <img src="images/rooms/{{$room->images->first()->path}}" class="d-block w-50" alt="..."> -->
                <div class="h5 font-weight-bold text-primary"> Hotel {{$room->hotel->name}}</div>
                <div class="d-md-flex justify-content-md-start align-items-md-center pt-3">
                    <div class="mr-auto"> <b>Nhận phòng</b>
                        <p class="text-justify text-muted">16-10-2021</p>
                    </div>
                    <div class="mr-auto"> <b>Trả phòng</b>
                        <p class="text-justify text-muted">18-10-2021</p>
                    </div>
                    <div class="mr-auto"> <b>Số đêm</b>
                        <p class="text-justify text-muted">2</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="h5 large">Nhập thông tin</div>
            <div id="details" class="bg-white rounded pb-5">
                <form>
                    <div class="form-group"> <label class="text-muted">Name</label> <input type="text" value="" class="form-control"> </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Email</label>
                                <div class="d-flex jusify-content-start align-items-center rounded p-2"> <input type="email" value=""> <span class="fas fa-check text-success pr-2"></span> </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Số điện thoại</label>
                                <div class="d-flex jusify-content-start align-items-center rounded p-2"> <input type="text" value=""> <span class="fas fa-check text-success pr-2"></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> <label class="text-muted">Địa chỉ</label>
                        <div class="d-flex jusify-content-start align-items-center rounded p-2"> <input type="text" value=""> <span class="fas fa-check text-success pr-sm-2 pr-0"></span> </div>
                    </div>
                    <div class="form-group"> 
                    Ghi chú:<input type="text" class="w-100 form-control" > 
                    </div>
                </form>
            </div> 
            <input type="checkbox" checked> <label>Tôi đặt phòng cho người khác</label>
            <div id="address" class="bg-white rounded  mt-3">
                <div class="d-md-flex justify-content-md-start align-items-md-center pt-3">
                    <div class="mr-auto"> 
                        <img src="images/coupon.png" style="width: 30px; height: 30px;">
                        <span>&nbsp; Mã giảm giá</span>
                    </div>
                    <div class="rounded py-2 px-3">
                        <i class="fa-fw fas fa fa-plus-square nav-icon"></i>
                    </div>
                </div>
            </div>
            <div id="address" class="bg-white rounded mt-3">
                <div class="h5 font-weight-bold text-primary">Phương thức thanh toán</div>
                <div class="text-success">Sau khi hoàn tất thanh toán, mã xác nhận phòng sẽ được gửi ngay qua SMS và Email của bạn.</div>
                <hr>
                <div class="d-md-flex justify-content-md-start align-items-md-center pt-3">
                    <div class="mr-auto">
                        <i class='fab fa-amazon-pay' style='font-size:24px'></i>
                        <span class="text-muted">&nbsp; Thanh toán Pay</span>                      
                    </div>
                    <div class="rounded py-2 px-3">
                        <input type="radio" name="status" value="PAY"> 
                    </div>
                </div>
                <hr>
                <div class="d-md-flex justify-content-md-start align-items-md-center pt-3">
                    <div class="mr-auto">
                        <i class='fab fa-cc-visa' style='font-size:24px'></i>
                        <span class="text-muted">&nbsp;Thẻ Visa</span>                        
                    </div>
                    <div class="rounded py-2 px-3">
                        <input type="radio" name="status" value="VISA"> 
                    </div>
                </div>
                <hr>
                <div class="d-md-flex justify-content-md-start align-items-md-center pt-3">
                    <div class="mr-auto">
                        <i class='far fa-credit-card' style='font-size:24px'></i>
                        <span class=" text-muted">&nbsp; Thẻ ATM/Tài khoản ngân hàng</span>                        
                    </div>
                    <div class="rounded py-2 px-3">
                        <input type="radio" check name="status" value="ATM"> 
                    </div>
                </div>
                <hr>
                <div class="d-md-flex justify-content-md-start align-items-md-center pt-3">
                    <div class="mr-auto">
                        <i class='fa fa-money' style='font-size:24px'></i>
                        <span class=" text-muted">&nbsp;Thanh toán khi nhận phòng</span>                        
                    </div>
                    <div class="rounded py-2 px-3">
                        <input type="radio" check name="status" value="ATM"> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1 pt-lg-0 pt-3">
            <div id="cart" class="bg-white rounded">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="h6">Thông tin phòng</div>
                    <div class="h6"> <a href="#">Edit</a> </div>
                </div>
                <div class="d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom">
                    <div class="item pr-2"> <img src="images/rooms/{{$room->images->first()->path}}" alt="" width="80" height="80">
                        <div class="number">2</div>
                    </div>
                    <div class="d-flex flex-column px-3"> 
                        <b class="h5"> {{$room->roomType->name}}</b>
                        
                    </div>
                    <div class="ml-auto"> <b class="h5">{{number_format($room->price)}}đ/đêm</b> </div>
                </div>
                
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-friends" style='font-size:15px;color:#7c7b77'></i>&nbsp; 2 người                 
                </div>
                <div class="d-flex align-items-center py-2">
                    <i class="fa fa-eye" style='font-size:15px;color:#7c7b77'></i>&nbsp;cửa sổ            
                </div> 
                <div class="d-flex align-items-center py-2">
                    <i class="fas fa-tv" style='font-size:15px;color:#7c7b77'></i>&nbsp; tivi            
                </div>                 
                <div class="d-flex align-items-center py-2 ">
                    <i class="fas fa-concierge-bell" style='font-size:15px;color:#7c7b77'></i>&nbsp;  Phục vụ bữa ăn sáng
                </div>
                
                
            </div>
            <div id="summary" class="bg-white rounded py-2 my-4">
                <div class="table-responsive">
                    <table class="table table-borderless w-75">
                        <tbody>
                            <tr class="text-muted">
                                <td>Số đêm</td>
                                <td>:</td>
                                <td>2</td>
                            </tr>
                            
                            <tr class="text-muted">
                                <td>Số phòng</td>
                                <td>:</td>
                                <td>
                                    <span class="fas fa-minus btn text-muted"></span>2<span class="fas fa-plus btn text-muted"></span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>Voucher</td>
                                <td>:</td>
                                <td>giảm 30%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="border-top py-2 d-flex align-items-center ml-2 font-weight-bold">
                    <div>Tổng tiền</div>
                    <div class="ml-auto px-2">{{number_format($room->price*2*2)}}đ</div>
                </div>
            </div>
            <div class="row pt-lg-3 pt-2 buttons mb-sm-0 mb-2">
                <div class="col-md-6">
                    <div class="btn text-uppercase">back to shopping</div>
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                    <div class="btn text-white ml-auto"> <span class="fas fa-lock"></span> Continue to Shopping </div>
                </div>
            </div>
            <div class="text-muted pt-3" id="mobile"> <span class="fas fa-lock"></span> Your information is save </div>
        </div>
    </div>
    <div class="text-muted"> <span class="fas fa-lock"></span> Your information is save </div>
</div>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #phong{
        border-collapse: collapse;
    }
    #phong th{   
        border: 1px solid black;
    }
    #phong td{
    border: 1px solid black;
    }
    </style>
</head>
<body>
    <p>hi {{$booking->user->name}}!!</p>

    <p>Chúng tôi đã <b><i>xác nhận yêu cầu đặt phòng</i></b> của bạn tại khách sạn Hotel Đà Nẵng</p>

    <h3 style="color:blue">Thông tin khách hàng</h3>
    <table>      
        <thead>
            <tr>
                <th>
                    Tên khách hàng:
                </th>
                <td>
                    {{$booking->user->name}}
                </td>
            </tr>  
            <tr>                 
                <th>
                    Email:
                </th>
                <td>
                    {{$booking->user->email}}
                </td>
            </tr>
            <tr>                 
                <th>
                    Số điện thoại:
                </th>
                <td>
                    {{$booking->user->phone}}
                </td>
            </tr>
            <tr>                 
                <th>
                    Địa chỉ:
                </th>
                <td>
                    {{$booking->user->address}}
                </td>
            </tr>  
            
        </thead>

    </table>
    <h3 style="color:blue">Thông tin đặt phòng</h3>
    <table>
                
        <thead>
            <tr style="border: 1px solid black;">
                <th >
                    Ngày đặt phòng:
                </th>
                <td>
                    {{$booking->created_at}}
                </td>
            </tr>  
            <tr>                 
                <th>
                    Mã giảm giá:
                </th>
                <td>
                    {{$booking->coupon->reduction}}
                </td>
            </tr>
            <tr>                 
                <th>
                    Trạng thái:
                </th>
                <td>
                    Đã duyệt
                </td>
            </tr>  

            <tr>                 
                <th>
                    Thanh toán:
                </th>
                <td>
                @if($booking->payment_status == '0')
                    <span>Thanh toán sau</span>
                @elseif($booking->payment_status == '1')
                    <span>Đã thanh toán</span>
                @elseif($booking->payment_status == '2')
                    <span>Đã thanh toán online</span>
                @else
                    Chưa có phương thức thanh toán
                @endif
                </td>
            </tr>     
            
        </thead>

    </table>
    <h3 style="color:blue">Thông tin chi tiết phòng</h3>
    <table id="phong">
                
        <thead>
            <tr>
                <th>
                    Loại phòng
                </th>                   
                <th>
                    Thời gian đặt
                </th>
                <th>
                    Số ngày 
                </th>
                <th>
                    Số lương 
                </th>
                <th>
                    Giá 
                </th>
                <th>
                tổng tiền 
                </th>
            </tr>
        </thead>
        <tbody>
        @php $sum_total = 0; @endphp
        @foreach($booking->bookingRooms as $room)
            <tr>
                <td>
                    {{$room->room->roomType->type}}
                </td>
                <td>
                    {{$room->startDate}} -> {{$room->endDate}}
                </td>
                <td>
                    {{$room->num_days}}
                </td>
                <td>
                    {{$room->qty_total}}
                </td>
                <td>
                    {{number_format($room->room->price)}}đ
                </td>
                <td style="text-align:right">
                    {{number_format($total=$room->num_days*$room->qty_total*$room->room->price)}}đ
                </td>
            </tr>
            @php $sum_total += $total @endphp
        @endforeach
            <tr>
                
                <th colspan="5">
                    Tổng tiền thanh toán
                </th>
                <td>
                    @php echo number_format($sum_total); @endphp 
                    đ
                </td>
            </tr>
        </tbody>
    </table><br>
    <b>Bạn kiểm tra lại thông tin, có gì sai sót hãy liên hệ tới số điện thoại <a>0329900041</a></b><br>
    <b>Cảm ơn bạn đã đặt phòng tại khách sạn chúc tôi !!! Chúc bạn một ngày vui vẻ</b>
</body>
</html>


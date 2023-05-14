<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'cities';


    public function Hotels()
    {
        return $this->hasMany('App\Models\Hotel', 'hotel_id', 'id');
    }
    public function rooms()
    {
        return $this->hasManyThrough('App\Models\Room', 'App\Models\Hotel','city_id', 'hotel_id', 'id');
    }
    public function hotel_rates()
    {
        return $this->hasManyThrough('App\Models\HotelRate', 'App\Models\Hotel',
        'city_id', // khóa ngoại của bảng trung gian
            'hotel_id', // khóa ngoại của bảng mà chúng ta muốn gọi tới
            'id', //trường mà chúng ta muốn liên kết ở bảng đang sử dụng
            'id' 
    );
    }
}

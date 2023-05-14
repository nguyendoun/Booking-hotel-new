<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'bookings';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        
        
    ];

    protected $fillable = [
        'user_id',
        'qty_room', 
        'status',
        'cancel_reason',
        'payment_status',
        'coupon_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];



    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function rooms(){
        return $this->belongsToMany('App\Models\Room', 'booking_rooms', 'booking_id', 'room_id');
    }
    
    public function coupon(){
        return $this->belongsTo('App\Models\Coupon');
    }
    public function bookingRooms(){
        return $this->hasMany('App\Models\BookingRoom', 'booking_id');
        
    }
    public function bookingInfos(){
        return $this->hasOne('App\Models\BookingInfo');
    }

}

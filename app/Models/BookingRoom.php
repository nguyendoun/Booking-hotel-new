<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingRoom extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'booking_rooms';

    
    
    protected $fillable = [
        'booking_id ',
        'room_id',
        'order_code',
        'qty_total',
        'subtotal',
        'startDate', 
        'endDate',
        'qty',
        'subtotal',
        'reduction',
        'total',
        'num_days',
        'reduction',
        'total',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function booking(){
        return $this->belongsTo('App\Models\Booking');
    }
     public function room(){
        return $this->belongsTo('App\Models\Room');
    }
    public function booking_services_details(){
        return $this->hasMany('App\Models\Booking_services_details');
    }
}

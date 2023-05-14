<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking_services_details extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'booking_services_details';

    public function bookingRoom(){
        return $this->belongsTo('App\Models\BookingRoom');
    }
    public function service(){
        return $this->belongsTo('App\Models\Service');
    }
}

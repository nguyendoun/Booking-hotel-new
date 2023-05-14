<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'coupons';

    protected $fillable = [
        'code',
        'remain',
        'reduction',
        'startDate',
        'endDate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function bookings(){
        return $this->hasMany('App\Models\Booking');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelRate extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'hotel_rates';

    protected $fillable = [
        'hotel_id',
        'rate',
        'comment',
        'user_id', 
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

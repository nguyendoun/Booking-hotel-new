<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Favorite extends Model
{
    use HasFactory;
    public $table = 'FavoriteHotel';

    public function getId() {
        $user_id = Auth::user()->id;
        $favohotel = Favorite::where('user_id', $user_id)->pluck('hotel_id');
        
        return $favohotel;
    }
}

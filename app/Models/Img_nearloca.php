<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img_nearloca extends Model
{
    use HasFactory;


    public $table = 'img_nearloca';


    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel', 'hotel_id');
    }
}

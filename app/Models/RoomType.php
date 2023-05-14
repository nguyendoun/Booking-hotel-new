<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomType extends Model
{
    use SoftDeletes;

    public $table = 'room_types';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'type',
        'bed',
        'capactity',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;

    use SoftDeletes;

    public $table = 'images';

    protected $fillable = [
        'path',
        'room_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function room(){
        return $this->belongsTo('App\Models\Room');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicesofhotel extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'servicesofhotel';

    protected $fillable = [
        'name',
        'hotel_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel', 'hotel_id');
    }
}

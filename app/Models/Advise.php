<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advise extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'email',
        'phone',
        'note',
        'type_customer',
    ];
}

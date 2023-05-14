<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'tile',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // public function rolesUsers()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission');
    }
     public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
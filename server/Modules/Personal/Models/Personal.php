<?php

namespace Modules\Personal\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Personal extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name_surname',
        'phone',
        'username',
        'password',
        'work_start_date',
        'work_end_date',
        'hourly_price',
        'position',
        'status',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password'        => 'hashed',
        'work_start_date' => 'datetime',  
        'work_end_date'   => 'datetime',  
    ];
}
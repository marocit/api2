<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    protected $fillable = [
        'temp_innen','temp_aussen','humidity', 'user_id',
    ];

    protected $hidden = [
        'user_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport_Specialization extends Model
{
    protected $fillable = [
        'user_id',
        'trans_id',
        'special_route_from',
        'special_route_to',
       
    ];


}

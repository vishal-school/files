<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class businessroute extends Model
{  
protected $primerykey ="id";

    protected $fillable = [
        'user_id',
        'business_id',
        'route_from',
        'route_to',
        'body_type',
        'truck_weight',
        'truck_height',
        'truck_length',
        'price',
        'material',
        'payment_method',
        'bid',
       
    ];

    
}

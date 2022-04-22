<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model

{  
    protected $primerykey ="business_id";
    
   protected $fillable = [
    'user_id',
    'business_name',
    'slug',
    'gst',
    'address',
    'mobile',
    'mobile1',
    'tagline',
    'city',
    'state',
    'country',
    'b_email',
    'b_rank',
    'recognised',
    'business_title',
    'business_header',
    'business_option',
    'business_option1',
    'business_option2',
    
     ];

     public function BusinessRoutes()
    {
        return $this->hasMany(\App\Models\businessroute::class,  'business_id', 'business_id');
    }




}

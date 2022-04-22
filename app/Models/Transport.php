<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
   protected $primerykey ="trans_id";

   protected $fillable = [
    'user_id',
    'transport_name',
    'transport_type',
    'gst',
    'address',
    'Slug',
    'mobile',
    'mobile1',
    'tagline',
    'city',
    'state',
    'country',
    't_email',
    't_rank',
    'recognised',
    'transport_title',
    'transport_header',
    'transport_option',
    'transport_option1',
    'transport_option2',
    
    ];
    public function TransportSpecial()
    {
        return $this->hasMany(\App\Models\Transport_Specialization::class,  'trans_id', 'trans_id');
    }




}

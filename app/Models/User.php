<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_type', 'name', 'email', 'password'  
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function businessprofile()
    {
        return $this->hasOne(\App\Models\Business::class, 'user_id', 'user_id');
    }

    public function businessroute()
    {
        return $this->hasMany(\App\Models\businessroute::class, 'user_id', 'user_id');
    }
    public function TransportProfile()
    {
        return $this->hasOne(\App\Models\Transport::class, 'user_id', 'user_id');
    }

    public function TransportSpecial()
    {
        return $this->hasMany(\App\Models\Transport_Specialization::class, 'user_id', 'user_id');
    }

}

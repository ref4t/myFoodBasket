<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class oc_user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // protected $guard = 'admin';
    public $timestamps = false;
    public $primaryKey='user_id';
    protected $table = 'oc_user';
    protected $hidden =['password'];
    // protected $fillable= ['user_group_id'];
  
}

<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
use HasFactory;
protected $primaryKey='admin_id';
protected $guarded;
 protected $fillable = [
        'name',
        'email',
        'password',
        'dob',
        'status',
         'type',
    ];
}

<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
  use HasApiTokens, Notifiable, HasRoles;

  protected $guard_name = 'admin';
  protected $fillable = [
    'name',
    'email',
    'password',
    'phone',
    'avatar',
    'is_active',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];

  protected $casts = [
    'is_active' => 'boolean',
  ];
}

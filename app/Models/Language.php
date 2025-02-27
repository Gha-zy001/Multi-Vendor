<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'languages';

    protected $fillable = [
        'abbr',
        'locale',
        'name',
        'native',
        'flag',
        'a_name',
        'script',
        'direction',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
    
}

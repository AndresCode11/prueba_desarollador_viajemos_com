<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhaterInfo extends Model
{
    use HasFactory; 

    protected $table = 'wheater_info';

    protected $fillable = [
        'city',
        'humedity',
        'visivility',
        'pressure',
        'chill',
        'wind_direction',
        'wind-speed',
        'created_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealershipCars extends Model
{
    use HasFactory;
    protected $fillable = [
        'd_id',
        't_id',
        'num_cars'
    ];
}

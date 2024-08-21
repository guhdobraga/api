<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;

    protected $table = "competitor";

    protected $fillable = [
        'street',
        'neighborhood',
        'number',
        'CEP',
        'city',
        'state',
        'country',
    ];
}

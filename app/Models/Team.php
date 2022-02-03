<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $timestamp=false;

    Protected $fillable = [
        'name',
        'role',
        'phone_number',
        'address',
        'description'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakers extends Model
{
    use HasFactory;
    protected $table = 'fakers';
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'birthdate',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caretaker extends Model
{
    use HasFactory;
    protected $fillable=
        [
            'name',
            'email',
            'address',
            'location',
            'qualification',
            'type',
            'certificate'

        ];

}

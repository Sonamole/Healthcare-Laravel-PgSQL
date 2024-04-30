<?php

namespace App\Models;

use App\Models\Login;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dietician extends Model
{
    use HasFactory;
    protected $fillable=[
        'login_id',
        'name',
        'email',
        'address',
        'location',
        'qualification',
        'certificate',
        'password',
    ];
    public function login(){

        return $this->belongsTo(Login::class);
    }
}

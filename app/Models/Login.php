<?php

namespace App\Models;
use App\Models\Dietician;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'email',
      'category',
      'password',

    ];

    public function dietician(){

      return $this->hasOne(Dietician::class);
    }
}

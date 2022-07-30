<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'groupid',
        'nama',
        'alamat',
        'hp',
        'email',
        'profile_pic'
    ];
}

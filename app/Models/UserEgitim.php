<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEgitim extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ders_id'];
}

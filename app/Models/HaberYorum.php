<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberYorum extends Model
{
    use HasFactory;

    protected $fillable = ['haber_id', 'user_id', 'baslik', 'icerik', 'onay', 'admin'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberSayfa extends Model
{
    use HasFactory;

    protected $fillable = ['ad', 'icerik', 'resim', 'navbar_gorunme', 'footer_gorunme'];
}

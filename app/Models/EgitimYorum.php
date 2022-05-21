<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimYorum extends Model
{
    use HasFactory;

    protected $fillable = ['egitim_id', 'kullanici_id', 'baslik', 'icerik', 'admin'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimSinav extends Model
{
    use HasFactory;

    protected $fillable = ['icerik_id', 'baslik', 'aciklama', 'admin'];
} 

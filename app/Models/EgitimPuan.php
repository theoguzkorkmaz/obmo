<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimPuan extends Model
{
    use HasFactory;

    protected $fillable = ['sinav_id', 'dogru_sayisi', 'yanlis_sayisi', 'puan', 'admin'];
} 

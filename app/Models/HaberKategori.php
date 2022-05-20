<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberKategori extends Model
{
    use HasFactory;

    protected $fillable = ['ad', 'aciklama', 'resim', 'resim_aciklama', 'icon', 'navbar_gorunme', 'footer_gorunme'];
}

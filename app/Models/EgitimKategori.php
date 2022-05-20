<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimKategori extends Model
{
    use HasFactory;

    protected $fillable = ['baslik', 'aciklama', 'resim', 'resim_aciklama', 'icon'];
}

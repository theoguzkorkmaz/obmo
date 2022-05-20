<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimEgitim extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_id', 'baslik', 'icerik', 'resim', 'resim_aciklama', 'etiket', 'kitle', 'kazanim', 'dokuman', 'sss']; 
}

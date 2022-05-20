<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimIcerik extends Model
{
    use HasFactory; 

    protected $fillable = ['egitim_id', 'icerik_no', 'baslik', 'aciklama', 'puan']; 
}

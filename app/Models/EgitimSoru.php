<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimSoru extends Model
{
    use HasFactory;

    protected $fillable = ['sinav_id', 'soru_no', 'soru', 'resim', 'resim_aciklama'];
}

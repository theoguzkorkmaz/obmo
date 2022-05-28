<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimIcerik extends Model
{
    use HasFactory; 

    protected $fillable = ['egitim_id', 'icerik_no', 'baslik', 'aciklama', 'video', 'video_aciklamasi', 'video_yazili', 'puan', 'admin']; 

    public function scopeFilter($query, array $filters) {
        if($filters['ara'] ?? false) {
            $query->where('baslik', 'like', '%'.request('ara').'%')
                ->orWhere('aciklama', 'like', '%'.request('ara').'%');
        }
    }
}

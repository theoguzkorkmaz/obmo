<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberHaber extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_id', 'baslik', 'icerik', 'resim', 'resim_aciklama', 'etiket', 'admin']; 

    public function scopeFilter($query, array $filters) {
        if($filters['ara'] ?? false) {
            $query->where('baslik', 'like', '%'.request('ara').'%')
                ->orWhere('icerik', 'like', '%'.request('ara').'%')
                ->orWhere('etiket', 'like', '%'.request('ara').'%');
        }
    }
}

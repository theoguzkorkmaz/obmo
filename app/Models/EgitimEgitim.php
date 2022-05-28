<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimEgitim extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_id', 'baslik', 'aciklama', 'icerik', 'resim', 'resim_aciklama', 'etiket', 'kitle', 'kazanim', 'dokuman', 'admin']; 

    public function scopeFilter($query, array $filters) {
        if($filters['ara'] ?? false) {
            $query->where('baslik', 'like', '%'.request('ara').'%')
                ->orWhere('aciklama', 'like', '%'.request('ara').'%')
                ->orWhere('icerik', 'like', '%'.request('ara').'%')
                ->orWhere('etiket', 'like', '%'.request('ara').'%');
        }
    }
}

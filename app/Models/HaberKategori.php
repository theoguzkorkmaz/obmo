<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberKategori extends Model
{
    use HasFactory;

    protected $fillable = ['ad', 'aciklama', 'resim', 'resim_aciklama', 'icon', 'navbar_gorunme', 'footer_gorunme', 'admin'];

    public function scopeFilter($query, array $filters) {
        if($filters['ara'] ?? false) {
            $query->where('ad', 'like', '%'.request('ara').'%')
                ->orWhere('aciklama', 'like', '%'.request('ara').'%');
        }
    }
}

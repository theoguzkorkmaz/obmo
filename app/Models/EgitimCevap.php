<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgitimCevap extends Model
{
    use HasFactory;

    protected $fillable = ['soru_id', 'cevap_no', 'icerik', 'dogru', 'admin'];

    public function scopeFilter($query, array $filters) {
        if($filters['ara'] ?? false) {
            $query->where('icerik', 'like', '%'.request('ara').'%');
        }
    }
} 

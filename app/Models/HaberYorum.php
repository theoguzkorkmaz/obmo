<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberYorum extends Model
{
    use HasFactory;

    protected $fillable = ['haber_id', 'user_id', 'baslik', 'icerik', 'onay', 'admin'];

    public function scopeFilter($query, array $filters) {
        if($filters['ara'] ?? false) {
            $query->where('baslik', 'like', '%'.request('ara').'%')
                ->orWhere('icerik', 'like', '%'.request('ara').'%');
        }
    }
}

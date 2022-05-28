<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosyal extends Model
{
    use HasFactory;

    protected $fillable = ['ad', 'icon', 'link', 'aciklama', 'aktiflik', 'admin'];

    public function scopeFilter($query, array $filters) {
        if($filters['ara'] ?? false) {
            $query->where('ad', 'like', '%'.request('ara').'%')
                ->orWhere('aciklama', 'like', '%'.request('ara').'%');
        }
    }
}

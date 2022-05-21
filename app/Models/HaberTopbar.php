<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberTopbar extends Model
{
    use HasFactory;

    protected $fillable = ['ad', 'link', 'aciklama', 'yer', 'icon', 'admin'];
}

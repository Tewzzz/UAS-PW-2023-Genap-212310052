<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;

    protected $table = 'homestay';

    protected $fillable=[
        'id', 'nama', 'deskripsi', 'harga', 'max_pax', 'image', 'is_active'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasi';

    protected $fillable=[
        'id', 'nama', 'deskripsi', 'harga', 'max_pax', 'image', 'is_active'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;

    protected $table = 'kuliner';

    protected $fillable=[
        'id', 'nama', 'deskripsi', 'harga', 'kategori_id', 'image'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
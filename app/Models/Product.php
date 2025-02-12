<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{  
    use HasFactory;

    protected $fillable = ['nama_barang', 'detail_barang', 'category_id', 'harga', 'foto', 'stok'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}



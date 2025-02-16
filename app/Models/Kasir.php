<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'qty', 'tgl_transaksi', 'total'];

    protected $dates = ['tgl_transaksi'];

    protected static function boot()
{
    parent::boot();
    static::creating(function ($transaction) {
        $transaction->id = mt_rand(100000, 999999); // ID acak 6 digit
    });
}

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

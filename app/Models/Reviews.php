<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'rating',
        'product_id',
        'customer_id',
    ];
    public function Product() {
        return $this->belongsTo(Products::class);
    }
    public function Customer() {
        return $this->belongsTo(Customers::class);
    }
}

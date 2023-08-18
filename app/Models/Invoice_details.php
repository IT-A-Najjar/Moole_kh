<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_details extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'count',
        'unit_price',
        'total_price',
        'product_id',
        'invoice_id',
    ];
    public function Product() {
        return $this->belongsTo(Products::class);
    }
    public function Invoice() {
        return $this->belongsTo(Invoices::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    protected $fillable = [
        'time',
        'total_amount',
        'customer_id',
    ];
    public function Customer() {
        return $this->belongsTo(Customers::class);
    }
    public function Invoice_details()
    {
        return $this->hasMany(Invoice_details::class);
    }
}

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
    public function User() {
        return $this->belongsTo(User::class);
    }
    public function Invoice_detail()
    {
        return $this->belongsTo(Invoice_details::class);
    }
}

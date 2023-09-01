<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_state',
        'order_date',
        'total_amount',
        'customer_id',
        'offer_id',
    ];
    public function User() {
        return $this->belongsTo(User::class);
    }
    public function Offer() {
        return $this->belongsTo(Offers::class);
    }
}

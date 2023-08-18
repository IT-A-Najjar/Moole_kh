<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;
    protected $fillable = [
        'offer_type',
        'offer_des',
        'discount_value',
        'expiry_date',
    ];
    public function Orders()
    {
        return $this->hasMany(Orders::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desctiption', 'price', 'image','type_id'];
    public function Type() {
        return $this->belongsTo(Types::class);
    }
    public function Invoice_details()
    {
        return $this->hasMany(Invoice_details::class);
    }
    public function Reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
    ];
    public function Category() {
        return $this->belongsTo(Categories::class);
    }
    public function Products()
    {
        return $this->hasMany(Products::class);
    }
}

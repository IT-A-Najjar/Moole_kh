<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone_number',
        'password',
    ];
    public function Invoices()
    {
        return $this->hasMany(Invoices::class);
    }
    public function Orders()
    {
        return $this->hasMany(Orders::class);
    }
    public function Reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}

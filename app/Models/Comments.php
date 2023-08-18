<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'news_id',
        'user_id',
    ];
    public function User() {
        return $this->belongsTo(User::class);
    }
    public function News() {
        return $this->belongsTo(News::class);
    }
}

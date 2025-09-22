<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name', 'first_name', 'email', 'tel', 'content', 'category_id', 'address', 'address_2', 'gender'
    ];

// リレーション: この問い合わせは1つのカテゴリに属する
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

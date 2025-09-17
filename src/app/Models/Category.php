<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
    'content',
    ];

// リレーション：カテゴリに属する複数のお問い合わせ
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}

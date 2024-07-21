<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['title', 'description', 'gallery', 'date', 'location', 'company', 'category_id', 'slug', 'locale'];

    // Связь с моделью Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Преобразование поля gallery в массив
    protected $casts = [
        'gallery' => 'array',
    ];

    // Получение основного изображения из галереи
    public function getMainImageAttribute()
    {
        return $this->gallery[0] ?? 'images/no_image.jpg';
    }
}

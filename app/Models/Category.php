<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Связь с моделью Offer
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    // Связь с переводами
    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function translate($locale)
    {
        return $this->translations()->where('locale', $locale)->first();
    }
}

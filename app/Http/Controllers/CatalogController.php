<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;

class CatalogController extends Controller
{
    /**
     * Отображение всех категорий.
     */
    public function showAllCategories()
    {
        $categories = Category::with('translations')->get();
        $offers = Offer::paginate(10);  // Измените на paginate для автоматической пагинации
        return view('pages.catalog', [
            'categories' => $categories,
            'offers' => $offers
        ]);
    }
}

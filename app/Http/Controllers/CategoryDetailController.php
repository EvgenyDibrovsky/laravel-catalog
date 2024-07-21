<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryDetailController extends Controller
{

    /**
     * Отображение конкретной категории по slug.
     */
    public function showCategory($categorySlug)
    {
        $category = Category::whereHas('translations', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })->firstOrFail();

        $translation = $category->translate(app()->getLocale());
        $offers = $category->offers()->paginate(1);  // Обеспечиваем пагинацию на уровне конкретной категории
        $categories = Category::with('translations')->get();

        return view('pages.category-detail', [
            'title' => $translation->title,
            'image' => $category->image,
            'content' => $translation->content,
            'offers' => $offers,
            'categories' => $categories
        ]);
    }
}

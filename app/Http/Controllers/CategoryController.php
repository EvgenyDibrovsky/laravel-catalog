<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Создание новой категории с переводами.
     */
    public function createCategory(Request $request)
    {
        $category = Category::create([
            'image' => $request->input('image'),
        ]);

        $translations = [
            ['locale' => 'en', 'title' => $request->input('title_en'), 'content' => $request->input('content_en'), 'slug' => $request->input('slug_en')],
            ['locale' => 'uk', 'title' => $request->input('title_uk'), 'content' => $request->input('content_uk'), 'slug' => $request->input('slug_uk')],
            ['locale' => 'pl', 'title' => $request->input('title_pl'), 'content' => $request->input('content_pl'), 'slug' => $request->input('slug_pl')],
            ['locale' => 'ru', 'title' => $request->input('title_ru'), 'content' => $request->input('content_ru'), 'slug' => $request->input('slug_ru')],
        ];

        $category->translations()->createMany($translations);

        return response()->json($category);
    }
}

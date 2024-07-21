<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function showOffer($categorySlug, $offerSlug)
    {
        $offer = Offer::where('slug', $offerSlug)->firstOrFail();
        $categories = Category::with('translations')->get(); // Получаем все категории для sidebar


        return view('pages.offer-single', [
            'offer' => $offer,
            'categories' => $categories, // Передаем категории в представление
        ]);
    }
}

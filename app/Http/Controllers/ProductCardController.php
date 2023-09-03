<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use Illuminate\Http\Request;

class ProductCardController extends Controller
{
    public function productCard()
    {
        $productCard = ProductCard::orderBy('id', 'ASC')->get();
        //dd($productCard);
        return view('productCard', compact('productCard'));
    }
}

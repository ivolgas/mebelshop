<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCardController extends Controller
{
    public function productCard($productCard)
    {
        //dd($productCard);
        return view('productCard', compact('productCard'));
    }
}

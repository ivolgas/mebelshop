<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use Illuminate\Http\Request;

class ProductCardController extends Controller
{
    public function productCard($id)
    {
        $product = ProductCard::find($id);

        return view('productCard', compact('product'));
    }

    public function addProductToCart($id)
    {
        $productCard = ProductCard::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $productCard->name,
                "quantity" => 1,
                "price" => $productCard->price,
                "image" => $productCard->image, 
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use Illuminate\Http\Request;

class ProductCardController extends Controller
{
    // public function productCard()
    // {
    //     // $productCard = ProductCard::orderBy('id', 'ASC')->get();
    //     // //dd($productCard);
    //     // return view('productCard', compact('productCard'));

    //     $productCards = ProductCard::orderBy('id', 'ASC')->get();
    //     //dd($productCards);
    //     return view('productCard', compact('productCards'));
    // }

    // public function productCard(ProductCard $productCard)
    // {
    //     return view('productCard', compact('productCard'));
    // }

    public function productCard($id)
    {
        $product = ProductCard::find($id);
        

        //$productCard = ProductCard::where('id', $product->id)->get();

        //dd($productCard);

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

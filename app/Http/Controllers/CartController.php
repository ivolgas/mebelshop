<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {        
        return view('cart');
    }

    public function deleteProduct(Request $request) 
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }
    }

}

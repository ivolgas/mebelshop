<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
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

    







    // public function addPurchase(Request $request)
    // {
    //     $this->validate($request, [
    //         'customer_name' => 'required|max:255',
    //         'customer_phone' => 'required|max:255',
    //     ]);        
        
    //     $purchase = Purchase::create(
    //         $request->all()
    //     );

    //     $cart = session()->get('cart');

    //     foreach ($cart->orders as $order) {
    //         $purchase->items()->create([
    //             'customer_name' => $order->customer_name,
    //             'customer_phone' => $order->customer_phone,
    //             'product_card_id' => $order->id,
    //         ]);
    //     }

    //     $cart->delete();

    //     //return redirect()->route('purchaseSuccess');

    //     return view('purchaseSuccess');
    // }
}

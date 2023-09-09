<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function session(Request $request)
    {
        //$customer_name = $request->input('customer_name');
        //dd($customer_name);
        //$customer_phone = $request->input('customer_phone');
        
        $productItems = [];

        foreach (session('cart') as $id => $details) {

            //$product_name = $details['name'];
            array_push($productItems, $id);
            
        }

        dd($productItems);


        return "success";
    }
}

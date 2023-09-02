<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
    {
        //dd($category);
        //$categoryObject = Category::where('name', $category)->first();
        //$category = Category::where('id', $id)->first();
        $products = ProductCard::orderBy('id')->get();

        //dd($products);
        return view('products', compact('products'));
    }
}

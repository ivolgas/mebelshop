<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getCategory($category_id)
    {        

        $category = Category::find($category_id);
        $products = ProductCard::where('category_id', $category->id)->get();

        return view('products', compact('category', 'products'));
    }
}

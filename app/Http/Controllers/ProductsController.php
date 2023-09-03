<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCard;
//use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $category_id;

    public function products()
    {
        $category = ProductCard::where('category_id', $this->category_id)->first();
        $category_id = $category->id;

        //dd($category);
        //$categoryObject = Category::where('name', $category)->first();
        //$category = Category::where('id', $id)->first();

        $products = ProductCard::where('category_id', $category_id)->orderBy('id', 'ASC')->get();

        //dd($products);
        
        return view('products', compact('products', 'category_id'));
    }
}

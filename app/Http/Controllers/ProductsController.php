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

        //dd($category->id);

        $products = ProductCard::where('category_id', $category->id)->get();

        //dd($products);

        return view('products', compact('category', 'products'));
    }





    //public $category_id;

    // public function products()
    // {
    //     // $category = ProductCard::where('category_id', $this->category_id)->first();
    //     // dd($category);
    //     // $category_id = $category->id;

    //     //dd($category);
    //     //$categoryObject = Category::where('name', $category)->first();
    //     //$category = Category::where('id', $id)->first();

    //     //$products = ProductCard::where('category_id')->orderBy('id', 'ASC')->get();

    //     // $categories = Category::all();
    //     // dd('categories'->id);


    //     // dd($category);


    //     // $category_id = ProductCard::orderBy('category_id', 'ASC')->get();

    //     // dd($category_id);

    //     // $getProducts = Category::find(1)->getProducts;

    //     // dd($getProducts);


    //     // foreach ($getProducts as $getProduct) {
    //     //     return $getProducts;
    //     // }

















    //     $products = ProductCard::orderBy('id', 'ASC')->get();

    //     //dd($products);

    //     return view('products', compact('products'));
    // }

    














    // public function products($id)
    // {

    //     $category_id = Category::find();
    //     dd($category_id);
    //     $products = ProductCard::where('category_id', $category_id)->orderBy('id', 'DESC')->simplePaginate(12);
    //     dd($products);

    //     return view('products', compact('products', 'catalog_product'));
    // }
}

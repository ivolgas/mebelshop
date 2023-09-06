<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{   
    // public function getCategory($category_id)
    // {
    //     $this->category_id = $category_id;
    // }       
    
    public function catalog()
    {       
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('catalog', compact('categories'));
    }

    // public function getCategory(Category $category)
    // {
    //     //dd($category);
    //     return view('products', compact('category'));
    // }
}

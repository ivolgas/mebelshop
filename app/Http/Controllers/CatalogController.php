<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{   
    public function catalog()
    {       
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('catalog', compact('categories'));
    }
}

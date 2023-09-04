<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCard extends Model
{
    use HasFactory;

    public $fillable = ['name', 'price', 'property', 'description', 'category_id', 'color_id'];

    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    

    // public function getCategory()
    // {
    //     $category = ProductCard::find($this->category_id);
    //     dd($category);
    // }
}

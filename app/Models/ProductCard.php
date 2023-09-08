<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCard extends Model
{
    use HasFactory;

    public $fillable = ['id', 'name', 'price', 'property', 'description', 'cat_name', 'image', 'image_slider_1', 'image_slider_2', 'image_color', 'category_id'];

    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}

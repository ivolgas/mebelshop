<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $table = 'purchases';
    protected $guarded = false;

    public $fillable = ['customer_name', 'customer_phone', 'product_card_id'];

    public function products(){

        return $this->hasMany(ProductCard::class, 'product_card_id');

    }
}

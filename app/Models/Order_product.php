<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Order_product extends Model
{
    public $fillable = ['order_id', 'product_id', 'quantity', 'price'];
    use HasFactory;

    public function products(): BelongsToMany {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id');
    }
    
}

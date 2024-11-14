<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class product extends Model
{
    public $fillable = ['name','category_id', 'price', 'Description', 'sale_price', 'stock', 'status', 'quantity', 'image', 'user_id', 'slug'];
    use HasFactory;
    public function category():BelongsTo{
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function orders():BelongsToMany{
        return $this->belongsToMany(Order::class, 'Order_products')->withPivot('quantity', 'price')->withTimestamps();
    }
}

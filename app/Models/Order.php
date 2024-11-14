<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Order extends Model
{
    public $fillable = ['price' ,'user_id', 'name', 'email', 'phone', 'address', 'status','total_price', 'note', 'Pay'];
    use HasFactory;

    public function products():BelongsToMany{
        return $this->belongsToMany(Product::class, 'Order_products')->withPivot('quantity', 'price')->withTimestamps();
    }
    
}

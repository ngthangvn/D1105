<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class category extends Model
{
    public $fillable = ['name', 'slug','description', 'order'];
    use HasFactory;

    public function products():HasMany{
        return $this->HasMany(Product::class, 'category_id', 'id');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriAll extends Controller
{
    public function show(){
        $categories = Category::with('products')->get(); // Lấy danh mục cùng sản phẩm
        return view('product.category', compact('categories'));
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    function home(Request $request){
        $name = $request->q ;
       
        $category = Category::orderBy('created_at', 'asc')
        ->orderBy('created_at', 'asc')
        ->get();
        if(!empty($request->q)){
            $products = Product::where('name', 'like', '%'.$name.'%')->get();
            
            
        return view('product.home', compact('category', 'products'));
        } else {
            // $products = Product::all();
            $products = Product::orderBy('created_at', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
            // $product_sold = Product::select('total_sold')->orderBy('created_at', 'desc')->paginate(4);
            // dd($product_sold);
        return view('product.home', compact('category', 'products'));
        }


    
    }
    function getProductByCategory($id){
        $category = Category::all();
        $category_id = Category::where('id', $id)->pluck('id')->take(3);
        $categoryName = Category::find($category_id[0]) ;   
        // dd($category_id);
        $products = Product::where('category_id', '=',$category_id[0])->orderBy('created_at', 'asc')->get();
        
        return view('product.category', compact('category', 'products','categoryName'));
    }
    function deltail($id){
        $product = Product::find($id);
        $category_id =$product->category_id;
        // dd($category);
        $products_same = Product::where('category_id', '=',$category_id)->orderBy('created_at', 'asc')->get();
        return view('product.deltail', compact('product', 'products_same'));
    }
    function product(){
        $products = Product::all();
        return view('product.products', compact('products'));
    }
    function blog(){
        return view('product.blog');
    }
    function about(){
        return view('product.about');
    }
    function contact(){
        return view('product.contact');
    }
}

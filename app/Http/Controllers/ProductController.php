<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\str;
use Intervention\Image\Facades\Image;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    function show(){
        
        $user_id = Auth::user()->id;
        
        $products = Product::where('user_id', '=', $user_id)->paginate(3);
        return view('admin.product.list', compact('products'));
    }
    function add(){
        return view('admin.product.add');
    }
    function store(Request $request){



           Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->slug),
            'price' => $request->price,
            'stock' => $request->stock,
            'Description' => $request->Description,
            'image' => $request->image,
            'status' => "1",
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'user_id'=> Auth::user()->id
            ]);




        return redirect()->route('product.list')->with('status', "Thêm mới thành công");
    }

    function update(Request $request, $id){
        $products = Product::find($id);

        $products->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->slug),
            'price' => $request->price,
            'stock' => $request->stock,
            'Description' => $request->Description,
            'image' => $request->image,
            'status' => "1",
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            // 'user_id'=> Auth::user()->id
        ]);

        return redirect()->route('product.list')->with('status', "Cập nhật thành công");
    }
    function edit($id){
        $user_id = Auth::user()->id;
        $product_user_id = Product::where('id', '=', $id)->pluck('user_id');
        //   dd($product_user_id);
        if($product_user_id != []){
            foreach($product_user_id as $item){
                if($user_id == $item){
                    $products = Product::find($id);
                    return view('admin.product.edit', compact('products'));
                } else {
                    return abort(404);
                }
            }
        } else {
            return abort(404);
        }

    }
    function delete($id){
        $user_id = Auth::user()->id;
        // dd(Auth::user()->role);
        $product_user_id = Product::where('id', '=', $id)->pluck('user_id');
        //   dd($product_user_id);
        if($product_user_id != []){
            foreach($product_user_id as $item){
                if($user_id == $item){
                    $products = Product::find($id)->delete();
                    return redirect()->route('product.list')->with('status', "Xóa sản phẩm thành công");
                } else {
                    return abort(404);
                }
            }
        } else {
            return abort(404);
        }


        // dd($products);
      
       
    }
}

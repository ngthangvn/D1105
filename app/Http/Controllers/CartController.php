<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Order_product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function show(){
        return view('product.cart');
    }

    function add($id){
        $product = Product::find($id);
        Cart::add([
                            'id' => $product->id, 
                            'name' => $product->name, 
                            'qty' => 1, 
                            'price' => $product->price, 
                            'options' => [
                                'image' => $product->image,
                                // Các thuộc tính khác của sản phẩm
                            ],
                         ]);
        return redirect('cart/show');
    }

    function deleteAll(){
        $product = Cart::destroy();
        return redirect('cart/show');
    }

    public function update(Request $request)
    {
        $rowId = $request->input('rowId');
        $qty = $request->input('qty');

        Cart::update($rowId, $qty);

        $product_total = Cart::get($rowId)->total();
        $total = Cart::total();

        return response()->json([
            'product_total' => $product_total,
            'total' => $total,
        ]);
    }

    function delete($rowId){
        Cart::remove($rowId);
        return redirect('/cart/show');
    }

    function pay(Request $request){
        
        $list_check = $request->input('products');

        
      

            $selectedProduct = array_filter($list_check, function($product){
                return isset($product['selected']);
            });
    
            if (!empty($selectedProduct)){
                return view('product.pay', compact('selectedProduct'));
            } else {
                return redirect()->back()->with('error', 'chưa có đơn hàng nào được chọn');
            }
       
        
       
    }

    function payOne(Request $request){
        $productBuy = $request->input('products');
        // dd($productBuy);
       $product_id = $productBuy['id'] ;
       $product_price = $productBuy['price'] ;
    //    $quantity = $product['quantity'] ;
       $quantity = 1 ;
       $total = $product_price * $quantity ;
        $product = Product::find($product_id);
      

        return view('product.pay', compact('product'));

    }

    
    function checkOut(Request $request){
    
        // dd($rowIds);
        $data = $request->except('rowId');
       
        // $data['price'] = $request->price;
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'pending';
        
        $rowIds = $request->input('rowId', []);
        

        $order = Order::create($data);
        
        if($rowIds != []){
            foreach($rowIds as $rowId){
                $item = Cart::get($rowId);
               
                // dd($item);
                $product_id = $item->id;
                // dd($product_id);
                if($item){
                    //    dd($order);
                       $order ->products()->attach($product_id, ['quantity'=>$item->qty, 
                                                                 'price' => $item->price]);
    
                       Cart::remove($rowId);
    
    
                }
            }
        }else{
           
            // dd($data);
            $product_id = $data['product_id'];
            $item = Product::find($product_id);
            // dd($product_id);

            $order ->products()->attach($product_id, ['quantity'=>$data['quantity'], 
            'price' => $item->price]);
        }
       


        

        return redirect()->route('home')->with('message', 'đặt hàng thảnh công');
    }
}
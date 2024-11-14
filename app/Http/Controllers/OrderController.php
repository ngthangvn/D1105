<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Order_product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    function index(){
        $user_id = Auth::user()->id ;
        $orders = Order::with('products')->where('user_id','=',$user_id)->paginate(15);
        // dd($orders);
        return view('product.order', compact('orders'));
    }

    function cancel($id){
        $orders = Order::where('id', $id);

        $data = [
            'status' => 'cansol',
        ];

        $orders->update($data);
        // dd($order);
        return redirect()->route('order.show')->with('succest', 'Hủy đơn hàn thành công');
    }

    function delete($id){
        $orders = Order::where('id', $id)->delete();
        return redirect()->route('order.show')->with('message', 'Xóa đơn hàng thành công');
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminOrderController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $userProductIds = Product::where('user_id', $user_id)->pluck('id');

        // Lọc các đơn hàng theo sản phẩm của người dùng
        $selectedOrders = Order::whereHas('products', function($query) use ($userProductIds) {
            $query->whereIn('products.id', $userProductIds);
        });

        // Phân trang các đơn hàng đã lọc
        $orders = $selectedOrders->paginate(4);

        return view('admin.order.index', compact('orders'));
    }

    public function showByStatus($status){
        // Phân trang các đơn hàng theo trạng thái
        $orders = Order::where('status', $status)->paginate(5);
        return view('admin.order.index', compact('orders'));
    }

    public function updateStatus(Request $request, $id){
        // Tìm đơn hàng theo id
        $order = Order::find($id);
        // Debug để kiểm tra
        // dd($request->input());

        if ($order) {
            $order->status = $request->status;
            $order->save();

            return redirect()->back();
        } else {
            return response()->json(['success' => false], 404);
        }
    }
}

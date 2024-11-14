@extends('layouts.home')

@section('title', 'Trang chủ')

@section('content')


    <div class="container mt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: #6c757d;">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Đơn mua</li>
            </ol>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            @if ($order->status == 'pending')
                                <input type="checkbox" name="products[{{ $loop->index }}][selected]" value="1">
                            @endif
                        </td>
                        <td>

                            @foreach ($order->products as $product)
                                <img src="{{ $product->image }}" alt="" class="img-fluid"
                                    style="width: 115.2px; height: 71.188px; ">
                            @endforeach
                        </td>
                        <td>
                            @foreach ($order->products as $product)
                                {{ $product->name }}
                            @endforeach

                        </td>
                        <td>
                            @foreach ($order->products as $product)
                                {{ number_format($product->price, 0, ',', '.') }}đ
                            @endforeach
                        </td>
                        <td>
                            @foreach ($order->products as $product)
                                {{ $product->pivot->quantity }}
                            @endforeach
                        </td>
                        <td>{{ number_format($order->total_price, 0, ',', '.') }}đ</td>
                        <td>

                            @if ($order->status == 'pending')
                                <p class="">Đang xử lý</p>
                            @elseif ($order->status == 'success')
                                <p>Thành công</p>
                            @else
                                <p>Đã hủy</p>
                                <td><a href="{{ route('order.delete', $order->id) }}" class="btn btn-danger">Xóa</a></td>
                @endif


                </td>

                <td>

                    @if ($order->status == 'pending')
                        <a href="{{ route('order.cancel', $order->id) }}" title=""
                            class="del-product btn btn-danger delete-link " onclick="deleteCategory()" style="color: white">
                            Hủy
                        </a>
                    @endif

                </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{ $orders->links() }}
    </div>
@endsection

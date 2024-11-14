@extends('layouts.home')

@section('title', 'Trang thanh toán')

@section('content')


    <div class="container py-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: #6c757d;"><i
                            class="fa-solid fa-house"></i>Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
            </ol>
        </div>
        <form action="{{ route('cart.checkOut') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Thông tin khách hàng</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" name="name" value="Nguyễn Đình Thắng">
                            </div>
                            <div class="form-group mb-3">
                                <label for="address">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="Hà Nội">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Điện thoại</label>
                                <input type="text" class="form-control" name="phone" value="0377519330">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="tn8652913@gmail.com">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Hình thức thanh toán</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Tiên mặt</option>
                                    <option value="2">Chuyển Khoản</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary">Đặt hàng</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Thông tin đơn hàng</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">

                                @php
                                    $total = 0;
                                @endphp

                                @if (isset($selectedProduct))
                                    @foreach ($selectedProduct as $product)
                                        <input type="hidden" name="rowId[]" value="{{ $product['rowId'] }}">
                                        <tr>
                                            <td>{{ $product['name'] }} x <strong>{{ $product['quantity'] }} </strong></td>
                                            <td class="text-end">
                                                {{ number_format($product['price'] * $product['quantity'], 0, ',', '.') }}đ
                                            </td>
                                        </tr>
                                        <input type="hidden" name="quantity[]" value="{{ $product['quantity'] }}">
                                        @php
                                            $total += $product['price'] * $product['quantity'];
                                        @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">

                                        <td>{{ $product['name'] }} x <strong>1</strong></td>
                                        <td class="text-end">
                                            {{ number_format($product['price'] * 1, 0, ',', '.') }}đ
                                        </td>
                                    </tr>
                                    <input type="hidden" name="quantity" value="1">
                                    @php
                                        $total += $product['price'] * 1;
                                    @endphp
                                @endif





                                <tr>
                                    <td>Tổng tiền: </td>
                                    <td class="text-end">{{ number_format($total, 0, ',', '.') }}đ
                                        <input type="hidden" name="total_price" value="{{ $total }}">
                                    </td>
                                </tr>

                                <tbody>

                                </tbody>
                            </table>
                            <div>
                                <button class="btn btn-primary">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

@endsection

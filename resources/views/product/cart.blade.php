@extends('layouts.home');

@section('content')
  
    @if (Cart::count() > 0)
        <form action="{{ route('cart.pay') }}" method="POST">
            @csrf
            <div class="container mt-5">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" style="text-decoration: none; color: #6c757d;">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                    </ol>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Số tiền</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach (Cart::content() as $product)
                            <tr data-row-id="{{ $product->rowId }}">
                                <td>
                                    <input type="checkbox" name="products[{{ $loop->index }}][selected]" value="1">
                                    <input type="hidden" name="products[{{ $loop->index }}][rowId]" value="{{ $product->rowId }}">
                                    <input type="hidden" name="products[{{ $loop->index }}][name]" value="{{ $product->name }}">
                                    <input type="hidden" name="products[{{ $loop->index }}][quantity]" value="{{ $product->qty }}">
                                    <input type="hidden" name="products[{{ $loop->index }}][price]" value="{{ $product->price }}">
                                </td>
                                <td>
                                    <img src="{{ $product->options->image }}" alt="" style="width: 115.2px; height: 71.188px; ">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price, 0, ',', '.') }}đ</td>
                                <td>
                                    <input type="number" min="1" class="quantity-input" style="width: 121.7px;" value="{{ $product->qty }}" name="qty[{{ $product->rowId }}]" data-rowid="{{ $product->rowId }}">
                                </td>
                                <td id="total-{{ $product->rowId }}">{{ number_format($product->price * $product->qty, 0, ',', '.') }}đ</td>
                                <td>
                                    <a href="{{ route('cart.delete', $product->rowId) }}" class="btn btn-danger btn-sm remove-button">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex flex-row-reverse bd-highlight">
                    @if (Cart::total() != 0)
                        <span id="total-cart">{{ Cart::total() }}</span>
                        <span>Tổng: </span>
                    @endif
                </div>
                <div class="d-flex flex-row-reverse bd-highlight">
        
                    <button class="btn btn-primary">Thanh toán</button>
                    <a href="{{ route('cart.deleteAll') }}" class="btn btn-primary" style="margin-right: 10px">Xóa hết</a>
        
                </div>
            </div>
        
        
            
        
        </form>
    @else
        <div class="container py-5">
            <div class="cart">
                <p>Giỏ hàng của bạn còn trống</p>
                <a href="{{ route('home') }}" class="btn btn-primary">MUA NGAY</a>
            </div>
        </div>
    @endif



            

@endsection
@push('script')
<script>



    $(document).ready(function() {
        $('.quantity-input').on('change', function() {
            var rowId = $(this).data('rowid');
            var qty = $(this).val();

            $.ajax({
                url: "{{ route('cart.update') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    rowId: rowId,
                    qty: qty
                },
                success: function(response) {
                    // Cập nhật tổng tiền cho sản phẩm hiện tại
                    $(`#total-${rowId}`).html(response.product_total);
                    // Cập nhật số lượng trong giỏ hàng
                    $(`input[name='qty[${rowId}]']`).val(qty);
                    // Cập nhật tổng tiền cho toàn bộ giỏ hàng
                    $('#total-cart').html(response.total);
                }
            });
        });
    });
    @if(session('error'))
        Swal.fire({
    icon: "error",
    title: "Lỗi",
    text: "{{ session('error') }}",
    });
    @endif
</script>



@endpush
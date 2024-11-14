@extends('layouts.home')

@section('title', 'Trang chi tiết')

@section('content')

    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="pt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->category->name }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
                <div class="col-lg-5 mt-3">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{ $product->image }}" alt="Card image cap"
                            id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-3">
                    <div class="card">
                        <form action="{{ route('cart.payOne') }}" method="POST">
                            @csrf
                            <input type="hidden" name="products[id]" value="{{ $product->id }}">
                            <input type="hidden" name="products[name]" value="{{ $product->name}}">
                            <input type="hidden" name="products[quantity]" value="{{ $product->qty }}">
                            <input type="hidden" name="products[price]" value="{{ $product->price }}">
                            <div class="card-body">
                                <h1 class="h2">{{ $product->name }}</h1>
                                <span class="new">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                                @if ($product->sale_price != 0)
                                    <span class="old">{{ number_format($product->sale_price, 0, ',', '.') }}đ</span>
                                @endif


                                <p>Description:{{ $product->Description }}</p>
                                <p>
                                    Tình trạng:
                                    @if ($product->quantity == 0)
                                        <span>Hết hàng</span>
                                    @else
                                        <span>Còn Hàng</span>
                                    @endif
                                </p>

                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-minus">-</span>
                                            </li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"></li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-plus">+</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="buy">MUA NGAY</button>
                                    </div>
                                    <div class="col d-grid">
                                        <a href="{{ asset('cart/show/add' . $product->id) }}"
                                            class="btn btn-success btn-lg" name="submit" value="addtocard">THÊM VÀO GIỎ
                                            HÀNG</a>
                                    </div>
                                </div>

                            </div>
                        </form>





                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Cùng danh mục</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">


                @foreach ($products_same as $product)
                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="{{ $product->image }}">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                    class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2"
                                                href="{{ route('deltail', $product->id) }}"><i class="far fa-eye"></i></a>
                                        </li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">{{ $product->name }}</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <div class="price">
                                    <span class="new">{{ number_format($product->price, 0, ',', '.') }}đ</span>
                                    @if ($product->sale_price != 0)
                                        <span
                                            class="old">{{ number_format($product->sale_price, 0, ',', '.') }}đ</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>


        </div>
    </section>

    <!-- Start Article -->






@endsection


@push('script')
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });

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
                    // Cập nhật số lượng trong giỏ hàng
                    $(`input[name='qty[${rowId}]']`).val(qty);
                    // Cập nhật tổng tiền cho toàn bộ giỏ hàng
                }
            });
        });
    });
    </script>
@endpush

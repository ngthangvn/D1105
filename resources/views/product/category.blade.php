@extends('layouts.home')

@section('title', 'Danh mục sản phẩm')

@section('content')

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q"
                        placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">



            @include('layouts.sidebar')


            <div class="col-lg-9">
                <div class="row">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://donghohieu.com.vn/uploads/banner/iconic-link-banner.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://beewatch.vn/wp-content/uploads/2020/05/banner-dong-ho-nam.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://donghohieu.com.vn/uploads/banner/banner-dong-ho-dang-cap.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <h3 class="h2 py-3">{{$categoryName->name }}</h3>         
                    {{-- @dd($products) --}}
                    @php
                        $count = 0;
                    @endphp
                    @if (isset($products))
                        @foreach ($products as $product)
                            @php
                                $count++;
                            @endphp
                            <div class="col-md-4">
                                <div class="card mb-4 product-wap rounded-0 widget2-top">
                                    <div class="card rounded-0 ">
                                        <img class="card-img rounded-0 img-fluid" src="{{ $product->image }} ">
                                        <div
                                            class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                            <ul class="list-unstyled">
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="{{ route('deltail', $product->id) }}"><i
                                                            class="far fa-eye"></i></a></li>
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="{{ asset('cart/show/add' . $product->id) }}"><i
                                                            class="fas fa-cart-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route('deltail', $product->id) }}"
                                            class="h3 text-decoration-none">{{ $product->name }}

                                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                                <li class="pt-2">
                                                    <span
                                                        class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
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
                                        </a>
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
                    @endif
                    @if ($count == 0)
                        <p class="text-center text-danger">không có sản phẩm</p>
                        <a href="{{ route('home') }}">Trơ về trang home</a>
                    @endif

                    
                   

                </div>





            </div>
        </div>

    </div>
    </div>
    <!-- End Content -->
@endsection

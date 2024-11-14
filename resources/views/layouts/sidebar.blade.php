<div class="col-lg-3">
    <h1 class="h2 pb-4">Danh mục sản phẩm</h1>
    <ul class="list-unstyled templatemo-accordion">
        <li class="pb-3">
            @foreach ($category as $categori)
                <a id="link" class="collapsed d-flex justify-content-between h3 text-decoration-none"
                    href="{{ route('getProductByCategory', $categori->id) }}">
                    {{ $categori->name }}
                </a>
            @endforeach
        </li>
    </ul>


    <div class="row">
        <div class="cart-header">
            <h1 class="h2 pb-4">sản phẩm mới nhất</h1>
        </div>
            <ul class="list-group list-group-flush">
            <!-- Product 1 -->

                @foreach ($products as $product)

                    <li class="widget2-left list-group-item d-flex align-items-center">
                        <a href="{{ route('deltail', $product->id)}}">
                        
                        <img src="{{ $product->image }}" class="img-fluid me-2" alt="Dell G7" style="width: 253.338px; transform: translate(-96px, 6.39999px); height: 112.1px; position: relative; left: 88px; top: -6px;">
                    </a>

                        <div>
                            <a href="{{ route('deltail', $product->id)}}" style="text-decoration: none; color: rgb(103, 101, 101)">
                            <h6 class="mb-1">{{ $product->name }}</h6>
                            <p class="text-danger mb-1">{{ number_format($product->price, 0, ',', '.') }}đ</p>
                        </a>
                        </div>

                    </li>

                @endforeach
            </ul> 
    </div>
</div>


@push('script')
    <script>
        const h3Links = document.querySelectorAll('#link');

        h3Links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ a
                const href = link.getAttribute('href'); // Lấy giá trị href của thẻ a

                // Thay đổi phần này để mở trong cùng một trang
                window.location.href = href;
            });
        });
    </script>
@endpush

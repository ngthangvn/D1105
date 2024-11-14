@extends('layouts.admin')

@section('heading')
    order
@endsection

@section('content')
    @section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Order</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Order</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Danh sách</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title py-3">Đơn hàng</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <a href="{{ route('order.list') }}" class="btn text-danger">Tất Cả</a>
                                <a href="{{ route('order.showByStatus', 'success') }}" class="btn ">Hoàn Tất</a>
                                <a href="{{ route('order.showByStatus', 'pending') }}" class="btn">Chờ xử lý</a>
                                <a href="{{ route('order.showByStatus', 'cancel') }}" class="btn">Hủy</a>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Tên </th>
                                            <th scope="col">Email</th>
                                            <th scope="col">SĐT</th>
                                            <th scope="col">Địa chỉ</th>
                                            <th scope="col">Thanh toán</th>
                                            <th scope="col">Trạng Thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                
                                        @php
                                            $start = ($orders->currentPage() - 1) * $orders->perPage() + 1;
                                        @endphp
                
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $start }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->address }}</td>
                                                <td>
                                                    {{ $order->Pay }}
                                                </td>
                                                <td>
                                                    <form id="statusform{{ $order->id }}"
                                                        action="{{ route('order.updateStatus', $order->id) }}" method="POST"
                                                        class="statusform2">
                                                        @csrf
                                                        @method('PUT')
                                                
                                                        <select name="status" class="form-select form-select-lg select-status"
                                                            id="selectstatus{{ $order->id }}">
                                                            @foreach (config('order.status') as $status)
                                                                <option value="{{ $status }}"
                                                                    {{ $status == $order->status ? 'selected' : '' }}>
                                                                    {{ $status }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </form>
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $orders->links() }}
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
@push('script')
<script>
    $(document).ready(function(){

        @foreach ($orders as $order)
            $('#selectstatus{{ $order->id }}').change(function (e){
                $('#statusform{{ $order->id }}').submit();
            });
        @endforeach


    });

</script>
@endpush

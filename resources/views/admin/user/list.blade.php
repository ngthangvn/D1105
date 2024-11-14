@extends('layouts.admin')

@section('heading')
    User
@endsection

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">User</h3>
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
                        <a href="#">User</a>
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
                            <h5 class="card-title py-3">user</h5>
                                <a href="{{ asset('admin/user/add') }}" class="btn btn-success">Thêm Mới</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>STT</th>
                                            <th>Họ Và Tên</th>
                                            <th>Email</th>
                                            <th>Quyền</th>
                                            <th>Ngày Tạo</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $start = ($users->currentPage() - 1) * $users->perPage() + 1;
                                        @endphp

                                        @foreach ($users as $item)
                                            <tr>

                                                @if ($item->role == 1)
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td>Admin</td>
                                                    <td>{{ $item['created_at'] }}</td>
                                                    <td>Tôi</td>
                                                @else
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td>{{ $start++ }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td>User</td>
                                                    <td>{{ $item['created_at'] }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.edit', $item->id) }}"
                                                            class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                            </svg></a>
                                                        <a href="{{ route('admin.delete', $item->id) }}"
                                                            class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                            </svg></a>
                                                    </td>
                                                @endif

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        @if (session('status'))
            Swal.fire({
                icon: "success",
                title: "Thành Công",
                text: "{{ session('status') }}",
            });
        @endif
    </script>
@endpush

@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Forms Thêm Mới</h3>
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
                        <a href="#">Thêm Mới</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Thêm Mới Người Dùng</div>
                        </div>
                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Username" />
                                        @error('name')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Email" />
                                        @error('email')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="password"
                                            name="password" />
                                        @error('password')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Quyền</label>
                                        <select class="">
                                            <option value="1">Admin</option>
                                            <option value="0">user</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Thêm Mới</button>
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

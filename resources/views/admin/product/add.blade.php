@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h3 class="fw-bold mb-3">Forms</h3>
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
                            <a href="#">Forms</a>
                        </li>
                        <li class="separator">
                            <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Basic Form</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Thêm Sản Phẩm</div>
                            </div>
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">

                                        <div class="form-group">
                                            <label for="name">Tên Sản Phẩm</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Nhập tên sản phẩm" />
                                        </div>
                                        <div class="form-group">
                                            <label for="category_id">Danh mục</label>
                                            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="category_id">
                                                <option value="1">Đồng Hồ Nam</option>
                                                <option value="2">Đồng Hồ Nữ</option>
                                                <option value="6">Đồng Hồ Đôi</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Giá</label>
                                            <input type="text" class="form-control" id="price" name="price"
                                                placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="sale_price">Giá được giảm</label>
                                            <input type="text" class="form-control" id="sale_price" name="sale_price"
                                                 />
                                        </div>
                                        <div class="form-group">
                                            <label for="Description">Mô Tả</label>
                                            <input type="text" class="form-control" id="Description"
                                                placeholder="viết mô tả" name="Description" />
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Ảnh: </label>
                                            <input type="text" class="form-control" id="image"
                                                name="image" />
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
    </div>
@endsection

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
                          <div class="card-title">Sửa Danh Mục</div>
                      </div>
                      <form action="{{ route('category.update', $category->id) }}" method="POST" >
                        @csrf
                          <div class="card-body">
                              <div class="row">

                                  <div class="form-group">
                                      <label for="name">Tên Danh Mục</label>
                                      <input type="text" id="name" name="name" class="form-control"
                                          placeholder="Username" value="{{ $category->name }}"/>
                                  </div>
                                  <div class="form-group">
                                      <label for="description">Mô Tả Danh Mục</label>
                                      <input type="description" class="form-control" id="description"
                                          name="description" placeholder="mô tả" value="{{ $category->description }}"/>
                                  </div>
                                  <div class="form-group">
                                      <label for="order">Thứ Tự</label>
                                      <input type="order" class="form-control" id="order" placeholder="order"
                                          name="order" value="{{ $category->order }}"/>
                                  </div>

                              </div>
                          </div>
                          <div class="card-action">
                              <button type="submit" class="btn btn-success">Cập Nhật</button>
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

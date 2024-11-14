@extends('layouts.admin')

@section('content')
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
                      <div class="card-title">Form Elements</div>
                  </div>
                  <form action="{{ route('admin.update', $users->id) }}" method="Post">
                    @csrf
                      <div class="card-body">
                          <div class="row">

                              <div class="form-group">
                                  <label for="name">Username</label>
                                  <input type="text" id="name" name="name" class="form-control"
                                      placeholder="Username"  value="{{ $users->name }}"/>
                                  @error('name')
                                      <p>{{ $message }}</p>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="email">Email Address</label>
                                  <input type="email" class="form-control" id="email" name="email"
                                      placeholder="Enter Email" value="{{ $users->email }}"/>
                                  @error('email')
                                      <p>{{ $message }}</p>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="role">Quyền</label>
                                  <select name="role">
                                      <option value="1">Admin</option>
                                      <option value="0">user</option>
                                  </select>
                              </div>

                          </div>
                      </div>
                      <div class="card-action">
                          <button type="submit" class="btn btn-success">Cập nhật</button>
                          <button class="btn btn-danger">Cancel</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection


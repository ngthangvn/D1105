@extends('layouts.login')
@section('title', 'Trang login')
@section('content')
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="text-center mb-4">Đăng nhập</h3>
                        <form method="POST" action="{{ route('login') }}" class="login-form">
                            @csrf
                            <div class="form-group">
                                    
                                    <x-input-label class="label" for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full form-control rounded-left" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            
                            </div>
                            <div class="form-group">
                                
                                    <x-input-label class="label" for="password" :value="__('Mật khẩu')" />
                        
                                    <x-text-input id="password" class="block mt-1 w-full form-control rounded-left"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />
                        
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Đăng
                                    nhập</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary" for="remember_me">ghi nhớ
                                        <input id="remember_me" type="checkbox" name="remember" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group text-center">
                               <span> Tạo tài khoản?</span>
                                <a href="{{ route('register') }}">Đăng ký</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@extends('layouts.login')
@section('title', 'Trang Đăng ký')
@section('content')

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="text-center mb-4">Đăng ký</h3>
                        <form method="POST" action="{{ route('register') }}"class="login-form">
                            @csrf
                            <div class="form-group">

                                <x-input-label class="label" for="name" :value="__('Họ và tên')" />
                                <x-text-input id="name" class="block mt-1 w-full form-control rounded-left" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        
                            </div>
                            <div class="form-group">
                                    
                                    
                                        <x-input-label class="label" for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full form-control rounded-left" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                                        <x-input-label class="label" for="password_confirmation" :value="__('Xác nhận lại mật khẩu')" />

                                        <x-text-input id="password_confirmation" class="block mt-1 w-full form-control rounded-left"
                                                        type="password"
                                                        name="password_confirmation" required autocomplete="new-password" />
                            
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Đăng
                                    ký</button>
                            </div>
                            <div class="form-group text-center">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Đăng nhập?') }}
                                    </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection


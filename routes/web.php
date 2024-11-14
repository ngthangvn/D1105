<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoriAll;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// login
Route::middleware('auth', 'checkrole')->group (function(){
    Route::get('/admin/user/list', [AdminUserController::class, 'show'])->name('admin.show');
    Route::get('/admin', [DashboardController::class, 'show'])->name('admin.dashboard');
    Route::get('/admin/user/add', [AdminUserController::class, 'add'])->name('adminAdd');
    Route::post('/admin/user/store', [AdminUserController::class, 'store'])->name('admin.store');
    Route::get('/admin/user/edit{id}', [AdminUserController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/user/update{id}', [AdminUserController::class, 'update'])->name('admin.update');
    Route::get('/admin/user/delete{id}', [AdminUserController::class, 'delete'])->name('admin.delete');

    // Danh mục

    Route::get('admin/category/list', [CategoryController::class, 'show'])->name('category.list');
    Route::get('admin/category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('admin/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    // sản phẩm

    Route::get('admin/product/list', [ProductController::class, 'show'])->name('product.list');
    Route::get('admin/product/add', [ProductController::class, 'add'])->name('product.add');
    Route::post('admin/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('admin/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('admin/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

    // đơn hàng

    Route::get('admin/order/list', [AdminOrderController::class, 'index'])->name('order.list');
    Route::get('admin/order/show/{status}', [AdminOrderController::class, 'showByStatus'])->name('order.showByStatus');
    Route::put('admin/order/update/{id}', [AdminOrderController::class, 'updateStatus'])->name('order.updateStatus');
});




// home


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('category/{id}', 'getProductByCategory')->name('getProductByCategory');
    Route::get('deltail/{id}', 'deltail')->name('deltail');
    Route::get('product', 'product')->name('products');
    Route::get('about', 'about')->name('about');
    Route::get('blog', 'blog')->name('blog');
    Route::get('contact', 'contact')->name('contact');
});

// giỏ hàng

Route::group(['controller' => CartController::class, 'middleware' => 'auth'], function () {
    Route::get('cart/show', 'show')->name('cart.show');
    Route::get('cart/show/add{id}', 'add')->name('cart.add');
    Route::get('cart/show/deleteAll', 'deleteAll')->name('cart.deleteAll');
    Route::post('cart/show/update', 'update')->name('cart.update');
    Route::get('cart/show/delete{rowId}', 'delete')->name('cart.delete');
    Route::post('cart/pay', 'pay')->name('cart.pay');
    Route::post('cart/checkOut', 'checkOut')->name('cart.checkOut');
    Route::post('cart/payOne', 'payOne')->name('cart.payOne');

});



// đơn hàng
Route::get('order/show', [OrderController::class, 'index'])->name('order.show');
Route::get('order/cancel/{id}', [OrderController::class, 'cancel'])->name('order.cancel');
Route::get('order/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');

// tất cả danh mục

Route::get('category/show', [CategoriAll::class, 'show'])->name('category.show');


require __DIR__.'/auth.php';

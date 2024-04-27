<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

//glob(app_path().'\Http\Controllers\*.php')
//домашняя страница
Route::get('/', function () {
    return view('home');
})->name('home');

//страница информация
Route::get('/about', function () {
    return view('about');
})->name('about');

//авторизация
Route::get('/login', function () {
    return view('users/login');
})->name('login');

//авторизация
Route::post('/login/submit', [LoginController::class, 'submit'])->name('contact-form');

//регистрация
Route::post('/registration/submit', [RegistrationController::class, 'submit'])->name('registr-form');

//профиль
Route::get('/profile', function () {
    return view('users/profile');
})->name('profile');

//регистрация
Route::get('/registration', function () {
    return view('users/registration');
})->name('registration');

//корзина
Route::get('/catalog', function () {
    return view('goods/catalog');
})->name('catalog');

//каталог
Route::get('/cart', function () {
    return view('carts/cart');
})->name('cart');

//один продукт
Route::get('/product', function () {
    return view('goods/product');
})->name('product');

//оформить заказ
Route::get('/create_order', function () {
    return view('orders/create_order');
})->name('create_order');


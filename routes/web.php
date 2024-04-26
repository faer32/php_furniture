<?php

use Illuminate\Support\Facades\Route;


//домашняя страница
Route::get('/', function () {
    return view('home');
});
//страница информация
Route::get('/about', function () {
    return view('about');
});

//авторизация
Route::get('/login', function () {
    return view('users/login');
});

//профиль
Route::get('/profile', function () {
    return view('users/profile');
});

//регистрация
Route::get('/registration', function () {
    return view('users/registration');
});

//корзина
Route::get('/catalog', function () {
    return view('goods/catalog');
});

//каталог
Route::get('/cart', function () {
    return view('carts/cart');
});

//один продукт
Route::get('/product', function () {
    return view('goods/product');
});

//оформить заказ
Route::get('/create_order', function () {
    return view('orders/create_order');
});


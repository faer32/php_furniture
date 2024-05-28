<?php

use App\Http\Controllers\{
    AuthController,
    RegistrationController,
    ProductController,
    ContactFormController
};

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


//отображение формы авторизации
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//отображение формы авторизации
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//авторизация
Route::post('/login_process', [AuthController::class, 'login_process'])->name('login_process');

//отображение формы регистрация
Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])
->name('registration');

//регистрация
Route::post('/register_process', [RegistrationController::class, 'register'])->name('register_process');

Route::get('/catalog', [ProductController::class, 'result'])->name('catalog');


//профиль
Route::get('/profile', function () {
    return view('users/profile');
})->name('profile');

//восстановление пароля
Route::get('/email', [ContactFormController::class, 'show'])->name('email');
Route::post('/email_process', [ContactFormController::class, 'email_process'])->name('email_process');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

//каталог
Route::get('/cart', function () {
    return view('carts/cart');
})->name('cart');

//один продукт
Route::get('/product/{uniq_id}', [ProductController::class, 'show'])->name('product');

//оформить заказ
Route::get('/create_order', function () {
    return view('orders/create_order');
})->name('create_order')->middleware('auth.custom');


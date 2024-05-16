<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AuthController,
    PostController
};





Route::middleware("auth:admin")->group(function(){
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('products', PostController::class); 
});

Route::middleware("guest:admin")->group(function(){
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login_process', [AuthController::class, 'login_process'])->name('login_process');
});

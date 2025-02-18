@extends('layouts.header')

@section('content')        
<!-- Контент -->
<div class="container">
    <div class="row mt-1">
        <div class="col-lg-2">
            <!-- Пустой блок на усмотрение -->
        </div>
        <div class="col-lg-10">
            <!-- Контент на странице -->
            <div class="row">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class=" bg-white p-4 mb-4 mx-2 rounded custom-shadow">
                            <h3 class="text-center mb-4">Корзина</h3>
                            <div class="container" id="cart-items-container">
                                <!-- Разметка корзины -->
                                <div class="card mb-3 text-bg-light shadow-lg">
                                    <div class="card-header">
                                        <h5 class="card-title">Товар</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row text-center">
                                                <div class="col p-0">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-dark btn-sm decrement"
                                                                data-cart-id="" data-cart-change-url="">-</button>
                                                        </span>
                                                        <input type="text" class="form-control number" value="1"
                                                            readonly>
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-dark btn-sm increment"
                                                                data-cart-id="" data-cart-change-url="">+</button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col p-0">
                                                    <p>x 100.00 = </p>
                                                </div>
                                                <div class="col p-0"><strong>100.00 $</strong></div>
                                                <div class="col p-0">
                                                    <a href="#" class="remove-from-cart" data-cart-id="">
                                                        <img class="mx-1" src="/images/icons/trash3-fill.svg"
                                                            alt="Catalog Icon" width="16" height="16">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card mb-3 shadow-lg">
                                    <div class="card-footer">
                                        <p class="float-left">Итого <strong>1</strong> товар(а) на сумму</p>
                                        <h4 class="float-left"><strong>100.00 $</strong></h4>
                                    </div>
                                </div>
                                <!-- Закончилась разметка корзины -->
                            </div>
                            <a class="btn btn-dark" href="{{ route('create_order') }}">
                                Оформить заказ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
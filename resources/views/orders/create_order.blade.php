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
            <div class=" bg-white p-4 mb-4 mx-2 rounded custom-shadow">
                <div class="container">
                    <h3 class="text-center mb-4">Выбранные товары</h3>
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
                                                <img class="mx-1" src="images/icons/trash3-fill.svg"
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
                </div>
                <!-- Детали заказа -->
                <div class="container">
                    <h3 class="text-center">Детали заказа</h3>
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="id_first_name" class="form-label">Имя*:</label>
                                        <input type="text" class="form-control" id="id_first_name"
                                            name="first_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_last_name" class="form-label">Фамилия*:</label>
                                        <input type="text" class="form-control" id="id_last_name" name="last_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="id_phone_number" class="form-label">Номер телефона*:</label>
                                        <input type="text" class="form-control" id="id_phone_number" name="phone_number"
                                            placeholder="В формате: XXX-XXX-XX-XX"
                                            required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="delivery" class="form-label">Способ доставки: </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="requires_delivery"
                                                id="id_requires_delivery" value="1" checked>
                                            <label class="form-check-label" for="id_requires_delivery">Нужна
                                                доставка</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="requires_delivery"
                                                id="id_requires_delivery" value="0">
                                            <label class="form-check-label" for="id_requires_delivery">Самовывоз</label>
                                        </div>
                                    </div>
                                    <div class="mb-3" id="deliveryAddressField">
                                        <label for="id_delivery_address" class="form-label">Адрес
                                            доставки*:</label>
                                        <textarea class="form-control" id="id_delivery_address"
                                            name="delivery_address" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label">Способ оплаты: </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="payment_on_get"
                                                id="id_payment_on_get" value="0" checked>
                                            <label class="form-check-label" for="id_payment_on_get">Оплата
                                                картой</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="payment_on_get"
                                                id="id_payment_on_get" value="1">
                                            <label class="form-check-label" for="id_payment_on_get">Наличными/картой
                                                при плучении</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark">Оформить заказ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
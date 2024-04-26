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
            <div class="container mt-5">
                <div class="card mb-4 custom-shadow">
                    <div class="row">
                        <!-- Миниатюры -->
                        <div class="col-md-4">
                            <img src="images/images/goods/set of tea table and three chairs.jpg"
                                class="img-thumbnail" data-bs-toggle="modal" data-bs-target="#imageModal1">
                        </div>
                        <div class="col-md-4 ">
                            <p class="product_id mt-3">id: 002654</p>
                        </div>
                        <!-- Увеличить изображение в модальном окне -->
                        <div class="modal fade" id="imageModal1" tabindex="-1"
                            aria-labelledby="imageModal1Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModal1Label">Изображение 1</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Закрыть"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/images/goods/set of tea table and three chairs.jpg"
                                            class="img-fluid" alt="Изображение 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Описание товара -->
                    <div class="card-body">
                        <p class="card-text">Цена: <strong>150.00 $</strong></p>
                        <h5 class="card-title">Чайный столик и три стула</h5>
                        <p class="card-text">Комплект из трёх стульев и дизайнерский столик для гостинной
                            комнаты.</p>
                        <a href="#" class="btn btn-dark add-to-cart">Добавить в корзину</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                    <!-- Форма фильтров -->
                    <div class="dropdown mb-2">
                        <button class="btn btn-secondary dropdown-toggle btn-dark" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Фильтры
                        </button>
                
                        <form action="" method="get" class="dropdown-menu bg-dark" data-bs-theme="dark">
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="checkbox" name="on_sale" id="flexCheckDefault" value="on">
                                <input type="hidden" name="q" value="request.GET.q">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Товары по акции
                                </label>
                            </div>
                            <p class="text-white mx-3 mt-3">Сортировать:</p>
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="radio" name="order_by" id="flexRadioDefault1" value="default" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    По умолчанию
                                </label>
                            </div>
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="radio" name="order_by" id="flexRadioDefault2" value="price">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    От дешевых к дорогим
                                </label>
                            </div>
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="radio" name="order_by" id="flexRadioDefault3" value="-price">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    От дорогих к дешевым
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mx-3 mt-3">Применить</button>
                        </form>
                    </div>
                    <!-- Карта товара -->
                    <div class="col-lg-4 col-md-6 p-4">
                        <div class="card border-primary rounded custom-shadow">
                            <img src="images/images/goods/set of tea table and three chairs.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="{{ route('product') }}">
                                    <p class="card-title">Чайный столик и три стула</p>
                                </a>
                                <p class="card-text text-truncate">Комплект из трёх стульев и дизайнерский столик для гостинной комнаты.</p>
                                <p class="product_id">id: 02265</p>
                                <div class="d-flex justify-content-between">
                                    <p><s>100</s> $</p>
                                    <p><strong>90.00 $</strong></p>
                                    <span class="badge bg-warning text-dark">Скидка 10.00 %</span>
                                    <!-- <p><strong>100.00 $</strong></p> -->
                                    <a href="#" class="btn add-to-cart">
                                        <img class="mx-1" src="images/icons/cart-plus.svg" alt="Catalog Icon"
                                            width="32" height="32">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Пагинация -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center my-4">
                        <div class="custom-shadow d-flex">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
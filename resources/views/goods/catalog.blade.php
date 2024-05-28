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
                
                        <form action="{{ route('catalog') }}" method="get" class="dropdown-menu bg-dark" data-bs-theme="dark">
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="checkbox" name="on_sale" id="flexCheckDefault" value="on" {{ $onSale == 'on' ? 'checked' : '' }}>
                                <input type="hidden" name="q" value="request.GET.q">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Товары по акции
                                </label>
                            </div>
                            <p class="text-white mx-3 mt-3">Сортировать:</p>
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="radio" name="order_by" id="flexRadioDefault1" value="default" {{ $orderBy == 'price' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    По умолчанию
                                </label>
                            </div>
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="radio" name="order_by" id="flexRadioDefault2" value="price" {{ $orderBy == 'price' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    От дешевых к дорогим
                                </label>
                            </div>
                            <div class="form-check text-white mx-3">
                                <input class="form-check-input" type="radio" name="order_by" id="flexRadioDefault3" value="-price" {{ $orderBy == '-price' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault3">
                                    От дорогих к дешевым
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary mx-3 mt-3">Применить</button>
                        </form>
                    </div>
                    @foreach($products as $pr)
                        <!-- Карта товара -->
                        <div class="col-lg-4 col-md-6 p-4">
                            <div class="card border-primary rounded custom-shadow">
                                @if ($pr->url_picture == null)
                                    <img src="/storage/images/Not found image.png" class="card-img-top" alt="...">
                                @else
                                    <img src="/storage/images/goods/{{ $pr->url_picture }}" class="card-img-top" alt="...">
                                @endif
                                <div class="card-body">
                                <a href="{{ route('product',$pr->uniq_id) }}">
                                        <p class="card-title">{{ $pr->name }}</p>
                                    </a>
                                    <p class="card-text text-truncate">{{ $pr->description }}</p>
                                    <p class="product_id">{{ $pr->uniq_id }}</p>
                                    <div class="d-flex justify-content-between">
                                        <!-- Старая цена -->
                                        @if ($pr->old_price !== null)
                                            <p><s>{{ $pr->old_price }}</s> $</p>
                                            <!-- Скидка -->
                                            <span class="badge bg-warning text-dark">Скидка {{ number_format(($pr->old_price - $pr->price) / $pr->old_price * 100, 0) }} %</span>
                                        @endif
                                        <p><strong>{{ $pr->price }} $</strong></p>
                                        <!-- <p><strong>100.00 $</strong></p> -->
                                        <a href="#" class="btn add-to-cart">
                                            <img class="mx-1" src="images/icons/cart-plus.svg" alt="Catalog Icon"
                                                width="32" height="32">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                </div>
                <div class="">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
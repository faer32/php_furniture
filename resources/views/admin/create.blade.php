@extends('layouts.admin')
@section('tables')
<h2 class="text-3xl font-bold text-gray-800 mb-6">{{isset($product) ? "Редактировать {$product->name}:" : "Добавить:"}}</h2>
<div class="container mx-auto px-6 py-8">
    <div class="mt-8">
        <form enctype="multipart/form-data" class="space-y-5" method="POST" action="{{isset($product) ? route("admin.products.update", $product->id) : route("admin.products.store")}}">
            @csrf     

            @if (isset($product))
                @method('PUT')
            @endif    

            <div class="mb-3">
                <label for="uniq_id" class="block text-sm font-medium text-gray-700 mb-2">Номер товара:</label>
                <input id="uniq_id" name="uniq_id" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('uniq_id') border-red-500 @enderror" value="{{ $product->uniq_id ?? '' }}" />
                @error('uniq_id')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Категория товара:</label>
                <input id="category" name="category" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('category') border-red-500 @enderror" value="{{ $product->category ?? '' }}" />
                @error('category')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Название:</label>
                <input id="name" name="name" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('name') border-red-500 @enderror" value="{{ $product->name ?? '' }}" />
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Описание:</label>
                <input id="description" name="description" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-500 @enderror" value="{{ $product->description ?? '' }}" />
                @error('description')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Цена:</label>
                <input id="price" name="price" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('price') border-red-500 @enderror" value="{{ $product->price ?? '' }}" />
                @error('price')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="old_price" class="block text-sm font-medium text-gray-700 mb-2">Старая цена:</label>
                <input id="old_price" name="old_price" type="text" placeholder="В случае отсутствия оставьте поле пустым" class="w-full h-12 border border-gray-800 rounded px-3 @error('old_price') border-red-500 @enderror" value="{{ $product->old_price ?? '' }}" />
                @error('old_price')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>        
            <div class="mb-3">
                @if(isset($product) && $product->url_picture)
                    <div>
                        <img class="h-64 w-64" src="/storage/images/goods/{{ $product->url_picture}}">
                    </div>
                @endif

                <label for="url_picture" class="block text-sm font-medium text-gray-700 mb-2">Фотография:</label>
                <input id="url_picture" name="url_picture" type="file" class="w-full h-12" />
                @error('url_picture')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="">Сохранить</button>
            </div>
        </form>
    </div>
</div>
@endsection
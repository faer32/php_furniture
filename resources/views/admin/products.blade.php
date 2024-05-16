@extends('layouts.admin')
@section('tables')
    <h2>Товары:</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Редактирование</th>
                    <th>Удаление</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->uniq_id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category}}</td>
                        <td>
                            <a href="{{route("admin.products.edit", $product->id)}}">Редактировать</a>
                        </td>
                        <td>
                            <form action="{{route("admin.products.destroy", $product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Удалить</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td> <a href="{{route("admin.products.create")}}">Добавить продукт</a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        {{-- {{ $products->links() }} --}}
    </div>
@endsection
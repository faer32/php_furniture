@extends('layouts.header')

@section('content')           
<!-- Контент -->
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6 bg-white p-4 mb-4 mx-3 rounded custom-shadow">
            <h2 class="text-center mb-4">Авторизация</h2>
            <form action="{{ route('admin.login_process') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Имя пользователя</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя пользователя" required minlength="5">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Введите ваш пароль" required minlength="4">
                </div>
                <button type="submit" class="btn btn-dark btn-block">Войти</button>
            </form>
            <br>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

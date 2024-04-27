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
                        <div class="col-md-6 bg-white p-4 mb-4 mx-3 rounded custom-shadow">
                            <h2 class="text-center mb-4">Авторизация</h2>
                            <form action="{{route('contact-form')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Имя пользователя</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Введите ваше имя пользователя" required minlength="5">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Пароль</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Введите ваш пароль" required minlength="8">
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Войти</button>
                            </form>
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="mt-3">
                                <a href="#">Забыли пароль?</a> | <a href="{{ route('registration') }}">Создать аккаунт</a>
                            </div>
                            <hr>
                            <div class="text-center">
                                <p>Или авторизуйтесь через:</p>
                                <a href="#" class="btn btn-dark">
                                    <img class="mx-1" src="/images/icons/google.svg" alt="Catalog Icon" width="16" height="16">
                                    Google
                                </a>
                                <a href="#" class="btn btn-dark">
                                    <img class="mx-1" src="/images/icons/facebook.svg" alt="Catalog Icon" width="16" height="16">
                                    Facebook
                                </a>
                                <a href="#" class="btn btn-dark">
                                    <img class="mx-1" src="/images/icons/github.svg" alt="Catalog Icon" width="16" height="16">
                                    GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


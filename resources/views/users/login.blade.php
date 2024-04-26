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
                            <form>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Имя пользователя</label>
                                    <input type="text" class="form-control" id="username" placeholder="Введите ваше имя пользователя" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Пароль</label>
                                    <input type="password" class="form-control" id="password" placeholder="Введите ваш пароль" required>
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Войти</button>
                            </form>
                            <div class="mt-3">
                                <a href="#">Забыли пароль?</a> | <a href="/registration">Создать аккаунт</a>
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


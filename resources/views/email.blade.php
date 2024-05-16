@extends('layouts.header')

@section('content')
<!-- Контент -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mt-5">Восстановление пароля</h2>
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ route('email_process') }}" method="post">
                    @csrf                       
                        <div class="alert alert-info">
                            Введите ваш email, чтобы получить ссылку для восстановления пароля.
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Отправить ссылку для восстановления</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

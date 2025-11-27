@extends('layout')
@section('content')

    <style>
        .btn-submit {
            border: solid 2px black;
            border-radius: 5px;
            background-color: transparent;
            padding: 7px 15px;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 10px;

            &:hover {
                background-color: black;
                color: white;

            }
        }
    </style>

    <img style="position: fixed;
    z-index: -100;" src="{{ asset('images/fon.png') }}">
    @if($user)
        <div class="container mt-5">
            <div class="alert alert-success" role="alert">
                Здравствуйте, {{ $user->name }}
            </div>
            <a href="{{ url('logout') }}" class="btn btn-primary">Выйти из системы</a>
        </div>
    @else
        <div class="container mt-5" style="max-width: 500px;">
            <h2 style="text-align: center;" class="mb-4">Вход в систему</h2>
            <form method="post" action="{{ url('auth') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                           value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                           name="password" value="{{ old('password') }}">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @error('error')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn-submit">Войти</button>
            </form>
        </div>
    @endif
@endsection

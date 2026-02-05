<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Fragrance</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&display=swap');


    h1, h2, h3, h4, h5, h6 {
        font-family: 'Cormorant Upright', serif;
        font-weight: 600;
    }


    body, p {
        font-family: 'Cormorant Upright', serif;
        font-weight: 400;
    }



    .btn-login {
        text-decoration: none;
        color: black;
        border: solid 1px black;
        border-radius: 5px;
        background-color: transparent;
        padding: 7px 15px;
        transition: all 0.3s ease;

        &:hover {
            background-color: black;
            color: white;
        }
    }

    .btn-logout {
        text-decoration: none;
        color: black;
        border: solid 1px black;
        border-radius: 5px;
        background-color: transparent;
        padding: 7px 15px;
        transition: all 0.3s ease;

        &:hover {
            background-color: black;
            color: white;
        }
    }
</style>
<body class="d-flex flex-column h-100">
<header>
    <nav class="navbar navbar-expand navbar-light fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">PerfumeStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Парфюмерия
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('fragrances') }}">Все ароматы</a></li>
                            <li><a class="dropdown-item" href="{{ url('fragrances/create') }}">Добавить аромат</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('brands') }}">Бренды</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('orders') }}">Заказы</a>
                    </li>
                </ul>
                @if(!Auth::user())
                    <a class="btn-login" href="{{ url('login') }}">Login</a>
                @else
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fa fa-user" style="font-size:20px;color:white;"></i>
                                <span> </span>{{ Auth::user()->name }}
                            </a>
                        </li>
                            <a class="btn-logout" href="{{ url('logout') }}">Выйти</a>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
</header>

@include('error')
@section('content')
@show

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>

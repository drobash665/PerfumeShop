@extends('layout')

@section('content')

    <style>
        .order-index {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }

        th {
            font-weight: normal;
            padding: 10px 15px;
        }

        td {
            border-top: 1px solid #e8edff;
            padding: 10px 15px;
        }

        tr:hover td {
            background: #e8edff;
        }

        .btn-show {
            transition: all 0.3s ease;
            width: 30%;
            margin: 0 auto;
            text-decoration: none;
            color: black;

            &:hover {
                color: #fb98f1;

            }
        }
    </style>
    <img style="position: fixed;
    z-index: -100;" src="{{ asset('images/fon.png') }}">
    <div class="order-index">
        <h2>Список заказов</h2>

        <table style="width: 70%; text-align: center">
            <thead>
            <tr>
                <th>ID</th>
                <th>Покупатель</th>
                <th>Сумма</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->amount }}</td>
                    <td>
                        <a class="btn-show"
                           href="{{ url('order/' . $order->id) }}">
                            Открыть
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

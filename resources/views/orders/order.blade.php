@extends('layout')
@section('content')

    <style>
        .order-show {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
            gap: 20px;
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
    <div class="order-show">
        <h2>{{ $order ? "Список товаров заказа № " . $order->id : 'Неверный ID заказа' }}</h2>

        @if($order)
            <table>
                <tr>
                    <th>ID</th>
                    <th>Название аромата</th>
                    <th>Пол</th>
                    <th>Год</th>
                    <th>Цена за единицу</th>
                    <th>Количество</th>
                    <th>Сумма</th>
                </tr>
                @foreach($order->fragrances as $fragrance)
                    <tr>
                        <td>{{ $fragrance->id }}</td>
                        <td>{{ $fragrance->name }}</td>
                        <td>{{ $fragrance->gender }}</td>
                        <td>{{ $fragrance->year }}</td>
                        <td>{{ number_format($fragrance->pivot->unit_price, 2) }} ₽</td>
                        <td>{{ $fragrance->pivot->quantity }}</td>
                        <td>{{ number_format($fragrance->pivot->unit_price * $fragrance->pivot->quantity, 2) }} ₽</td>
                    </tr>
                @endforeach
            </table>

            @if($total && $total->total)
                <h2>Итого: {{ number_format($total->total, 2) }} ₽</h2>
            @elseif($order->amount)
                <h2>Итого: {{ number_format($order->amount, 2) }} ₽</h2>
            @endif

            <div>
                @if($order->user)
                    <p><strong>Пользователь:</strong> {{ $order->user->name }} (ID: {{ $order->user->id }})</p>
                @endif
            </div>
        @endif
    </div>
@endsection

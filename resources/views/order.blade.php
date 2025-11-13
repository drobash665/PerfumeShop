<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Детали заказа</title>
</head>
<body>
<h2>{{ $order ? "Список товаров заказа № " . $order->id : 'Неверный ID заказа' }}</h2>

@if($order)
    <table border="1">
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
</body>
</html>

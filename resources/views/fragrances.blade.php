<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Список товаров</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Наименование</td>
    <td>Цена</td>
    <td>Бренд</td>
    </thead>
    @foreach ($fragrances as $fragrance)
        <tr>
            <td>{{$fragrance->id}}</td>
            <td>{{$fragrance->name}}</td>
            <td>{{$fragrance->price}}</td>
            <td>{{$fragrance->brand->name}}</td>
            <td>
                <a href="{{ url('fragrance/destroy/'.$fragrance->id) }}">Удалить</a>
                <a href="{{ url('fragrance/edit/'.$fragrance->id) }}">Редактировать</a>
            </td>
        </tr>
    @endforeach
</table>
{{$fragrances->links()}}

</body>
</html>

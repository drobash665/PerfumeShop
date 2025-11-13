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
<h2>{{$brand ? "Список ароматов бренда " .$brand->name : 'Неверный ID бренда'}}</h2>
@if($brand)
    <table border="1">
        <td>id</td>
        <td> Наименование</td>
        <td>Цена</td>
        @foreach($brand->fragrances as $fragrance)
            <tr>
                <td>{{$fragrance->id}}</td>
                <td>{{$fragrance->name}}</td>
                <td>{{$fragrance->price}}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>

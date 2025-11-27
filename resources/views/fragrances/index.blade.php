@extends('layout')
<style>
    .fragrance-index {
        display: flex;
        flex-direction: column;
        align-items: center
    }

    th {
        font-weight: normal;
        color: #039;
        padding: 10px 15px;
    }

    td {
        border-top: 1px solid #e8edff;
        padding: 10px 15px;
    }

    tr:hover td {
        background: #e8edff;
    }

    .delete-btn, .update-btn {
        text-decoration: none;
        color: black;
        transition: all 0.2s ease;
        margin-right: 10px;

        &:hover {
            color: #fb98f1;
        }
    }
</style>
<body>
<img style="position: fixed;
    z-index: -100;" src="{{ asset('images/fon.png') }}">
<div class="container">
    <div class="fragrance-index">
        <h2 style="margin-top: 100px;   ">Список товаров</h2>
        <table>
            <thead>
            <td>id</td>
            <td>Наименование</td>
            <td>Цена</td>
            <td>Бренд</td>
            <td>Действия</td>
            </thead>
            @foreach ($fragrances as $fragrance)
                <tr>
                    <td>{{$fragrance->id}}</td>
                    <td>{{$fragrance->name}}</td>
                    <td>{{$fragrance->price}}</td>
                    <td>{{$fragrance->brand->name}}</td>
                    <td>
                        <a class="delete-btn" href="{{ url('fragrances/destroy/'.$fragrance->id) }}">Удалить</a>
                        <a class="update-btn" href="{{ url('fragrances/edit/'.$fragrance->id) }}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$fragrances->links()}}
    </div>
</div>
</body>


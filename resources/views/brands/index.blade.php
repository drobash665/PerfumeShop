@extends('layout')
<style>
    .brand-index {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 100px;
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
<div class="brand-index">
    <h2>Список брендов:</h2>
    <table>
        <thead>
        <td>id</td>
        <td>Наименование</td>
        <td>Действия</td>
        </thead>
        @foreach($brands as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>{{$brand->name}}</td>
                <td>
                    <a href="{{ url('brand/' . $brand->id) }}" class="btn-show">
                        Показать
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

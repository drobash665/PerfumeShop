@extends('layout')
<style>
    .brand-show {
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
</style>

<img style="position: fixed;
    z-index: -100;" src="{{ asset('images/fon.png') }}">
<div class="brand-show">
    <h2>{{$brand ? "Список ароматов бренда " .$brand->name : 'Неверный ID бренда'}}</h2>
    @if($brand)
        <table>
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
</div>

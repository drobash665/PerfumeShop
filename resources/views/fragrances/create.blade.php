@extends('layout')

@section('content')

    <style>
        .btn-submit {
            border: solid 2px black;
            border-radius: 5px;
            background-color: transparent;
            padding: 7px 15px;
            transition: all 0.3s ease;
            width: 30%;
            margin: 0 auto;

            &:hover {
                background-color: black;
                color: white;

            }
        }
    </style>
    <img style="position: fixed;
    z-index: -100;" src="{{ asset('images/fon.png') }}">
    <div class="container mt-5">
        <h2 style="text-align: center" class="mb-4">Добавление товара</h2>

        <form class="d-flex flex-column" style="width: 70%; margin: 0 auto;" method="post" action="{{ url('fragrances') }}">
            @csrf


            <div class="mb-3">
                <label class="form-label">Наименование</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Цена</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                       value="{{ old('price') }}">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Бренд</label>
                <select name="brand_id" class="form-select @error('brand_id') is-invalid @enderror">
                    <option value="">Выберите бренд</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}"
                            {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
                @error('brand_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Описание</label>
                <textarea name="description"
                          class="form-control @error('description') is-invalid @enderror"
                          rows="3">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Пол</label>
                <select name="gender" class="form-select @error('gender') is-invalid @enderror">
                    <option value="">Выберите пол</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Мужской</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Женский</option>
                    <option value="unisex" {{ old('gender') == 'unisex' ? 'selected' : '' }}>Унисекс</option>
                </select>
                @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Год выпуска</label>
                <input type="date" name="year" class="form-control @error('year') is-invalid @enderror"
                       value="{{ old('year') }}">
                @error('year')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn-submit">Добавить товар</button>

        </form>
    </div>
@endsection

@extends('layout')

<style>
    .btns {
        margin: 0 auto;
        display: flex;
        justify-content: space-evenly;

        .btn-submit {
            border: solid 2px black;
            border-radius: 5px;
            background-color: transparent;
            padding: 8px 15px;
            transition: all 0.3s ease;
            width: 20%;

            &:hover {
                background-color: black;
                color: white;

            }
        }

        .btn-cancel {
            color: white;
            background-color: black;
            border-radius: 5px;
            padding: 11px 15px;
            transition: all 0.3s ease;

            a {
                text-decoration: none;

            }

            &:hover {
                background-color: transparent;
                color: black;
                border: solid 2px black;

            }
        }
    }
</style>
@section('content')

    <img style="position: fixed;
    z-index: -100;" src="{{ asset('images/fon.png') }}">
    <div class="container mt-5">
        <h2 style="text-align: center" class="mb-4">Редактирование товара</h2>
        <form method="post" action="{{ url('fragrances/update/'.$fragrance->id) }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Наименование</label>
                <input type="text" name="name"
                       class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name', $fragrance->name) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Цена</label>
                <input type="text" name="price"
                       class="form-control @error('price') is-invalid @enderror"
                       value="{{ old('price', $fragrance->price) }}">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Бренд</label>
                <select name="brand_id" class="form-select @error('brand_id') is-invalid @enderror">
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}"
                                @if(old('brand_id', $fragrance->brand_id) == $brand->id) selected @endif>
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
                          rows="3">{{ old('description', $fragrance->description) }}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Пол</label>
                <select name="gender" class="form-select @error('gender') is-invalid @enderror">
                    <option value="">Выберите пол</option>
                    <option value="male" @if(old('gender', $fragrance->gender) == 'male') selected @endif>Мужской
                    </option>
                    <option value="female" @if(old('gender', $fragrance->gender) == 'female') selected @endif>Женский
                    </option>
                    <option value="unisex" @if(old('gender', $fragrance->gender) == 'unisex') selected @endif>Унисекс
                    </option>
                </select>
                @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Год выпуска</label>
                <input type="date" name="year"
                       class="form-control @error('year') is-invalid @enderror"
                       value="{{ old('year', $fragrance->year) }}">
                @error('year')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="btns">
                <button type="submit" class="btn-submit">Сохранить</button>
                <a style="text-decoration: none" href="{{ url('/fragrances') }}" class="btn-cancel">Отмена</a>
            </div>
        </form>
    </div>
@endsection

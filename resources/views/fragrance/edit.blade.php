
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-31</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Редактирование товара</h2>
<form method="post" action="{{ url('fragrance/update/'.$fragrance->id) }}">
    @csrf
    <label>Наименование</label>
    <input type="text" name="name" value="@if (old('name')) {{old('name')}} @else {{$fragrance->name}} @endif " />
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Цена</label>
    <input type="text" name="price" value="@if (old('price')) {{old('price')}} @else {{$fragrance->price}} @endif " />
    @error('price')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Бренд</label>
    <select name="brand_id">
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}"
                    @if(old('brand_id'))
                        @if(old('brand_id') == $brand->id) selected @endif
                    @else
                        @if($fragrance->brand_id == $brand->id) selected @endif
                @endif >{{ $brand->name }}</option>
        @endforeach
    </select>
    @error('brand_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Описание</label>
    <textarea name="description">{{old('description')}}</textarea>
    @error('description')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br>
    <label>Пол</label>
    <select name="gender">
        <option value="">Выберите пол</option>
        <option value="male" @if(old('gender') == 'male') selected @endif>Мужской</option>
        <option value="female" @if(old('gender') == 'female') selected @endif>Женский</option>
        <option value="unisex" @if(old('gender') == 'unisex') selected @endif>Унисекс</option>
    </select>
    @error('gender')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br>
    <label>Год выпуска</label>
    <input type="date" name="year" value="{{old('year')}}"/>
    @error('year')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br>
    <input type="submit">

</form>
</body>
</html>

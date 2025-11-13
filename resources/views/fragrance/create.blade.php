<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> .is-invalid { color: #c609bd;}</style>
</head>
<body>
<h2>Добавление товара</h2>
<form method="post" action="{{url('fragrance')}}">
    @csrf
    <label>Наименование</label>
    <input type="text" name="name" value="{{old('name')}}"/>
    @error('name')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br>
    <label>Цена</label>
    <input type="text" name="price" value="{{old('price')}}"/>
    @error('price')
    <div class="is-invalid">{{$message}}</div>
    @enderror
    <br>
    <label>Бренд:</label>
    <select name="brand_id">
        <option value="">Выберите бренд</option>
        @foreach($brands as $brand)
            <option value="{{$brand->id}}"
                    @if(old('brand_id') == $brand->id) selected @endif>
                {{$brand->name}}
            </option>
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

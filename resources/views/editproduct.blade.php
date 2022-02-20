@extends('master')
@section('content')

<div class="custom-product">
<form action="/updateproduct" method="POST">
    @csrf
    <input type="hidden" name="id" value='{{$product->id}}'><br>
Naziv:<input type="text" name="name" value='{{$product->name}}' class='form-control'><br>
Cena:<input type="text" name="price" value='{{$product->price}}' class='form-control'><br>
Kategorija:<input type="text" name="category" value='{{$product->category}}' class='form-control'><br>
Opis:<input type="text" name="description" value='{{$product->description}}' class='form-control'><br>
Slika:<input type="text" name="gallery" value='{{$product->gallery}}' class='form-control'><br>
<input type="submit" name="submit" value="Izmeni" class='btn btn-success'>
</form>
</div>
@endsection
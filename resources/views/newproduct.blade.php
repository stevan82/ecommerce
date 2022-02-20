@extends('master')
@section('content')
<div class="custom-product">
<form action="/newproduct" method="POST">
    @csrf
Naziv<input type="text" name="name" class='form-control'><br>
Cena<input type="text" name="price" class='form-control'><br>
Kategorija<input type="text" name="category" class='form-control'><br>
Opis<input type="text" name="description" class='form-control'><br>
Slika<input type="text" name="gallery" class='form-control'><br>
<input type="submit" name="submit" value="Unesi" class='btn btn-success'>
</form>
</div>
@endsection
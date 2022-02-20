@extends('master')
@section('content')
<div class="custom-product">


<div class="col-sm-10">
<div class="trending-wrapper">
<h2>Spisak proizvoda u korpi</h2>
<a href="ordernow" class="btn btn-success">Naruci odmah</a><br><br>
@foreach($products as $item)
<div class="row searched-item cart-list-divider">
    <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
    <div class="searched-item">
      <img class='trending-image' src="{{$item->gallery}}">   
</div>
</a>
    </div>
    <div class="col-sm-4">
        <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->description}}</h5>
        </div>
    </div>
        <div class="col-sm-3">
            <a href='/removecart/{{$item->cart_id}}' class="btn btn-warning">Izbaci iz korpe</a>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
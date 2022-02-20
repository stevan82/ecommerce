@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h2>Moje porudzbine</h2>

@foreach($orders as $item)
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
        <h2>Naziv:{{$item->name}}</h2>
        <h5>Status isporuke:{{$item->status}}</h5>
        <h5>Adresa:{{$item->address}}</h5>
        <h5>Status placanja:{{$item->payment_status}}</h5>
        <h5>Nacin placanja:{{$item->payment_method}}</h5>
        </div>
    </div>
        
    </div>
</div>
@endforeach
</div>
@endsection
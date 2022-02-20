@extends('master')
@section('content')
<div class="custom-product">

<div class="col-sm-3">
    <a href="#">Filter</a>
</div>
<div class="col-sm-4">
<div class="trending-wrapper">
<h2>Rezultati za proizvode</h2>
@foreach($products as $item)
<a href="detail/{{$item['id']}}">
<div class="searched-item">
      <img class='trending-image' src="{{$item['gallery']}}" alt="Los Angeles">
      <div class=''>
          <h2>{{$item['name']}}</h2>
          <h5>{{$item['description']}}</h5>
     </div>
</div>
</a>
@endforeach<div class="trending-wrapper">
<h2>Rezultati za proizvode</h2>
@foreach($products as $item)
<a href="detail/{{$item['id']}}">
<div class="searched-item">
      <img class='trending-image' src="{{$item['gallery']}}" alt="Los Angeles">
      <div class=''>
          <h2>{{$item['name']}}</h2>
          <h5>{{$item['description']}}</h5>
     </div>
</div>
</a>
@endforeach
</div>

</div>
@endsection
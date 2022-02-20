@extends('master')
@section('content')

<div class="custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h2>Spisak proizvoda</h2>
<a href='/newproduct' class="btn btn-primary">Unesi proizvod</a>
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
        <a href='/editproduct/{{$item->id}}' class="btn btn-success">Izmeni proizvod</a>
            <a href='/removeproduct/{{$item->id}}' class="btn btn-danger">Obrisi proizvod</a>
        </div>
    </div>
</div>
@endforeach

</div>
<div class="col-sm-12" style='text-align:center'>
{{ $products->links() }}
</div>

@endsection
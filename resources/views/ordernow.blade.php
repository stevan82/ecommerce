@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
    <table class="table">
    <thead>      
    </thead>
    <tbody>
      <tr>
        <td>Iznos</td>
        <td>{{$total}}</td>      
      </tr>
      <tr>
        <td>Porez</td>
        <td>$0</td>        
      </tr>
      <tr>       
        <td>Isporuka</td>
        <td>$ 10</td>
      </tr>
      <tr>       
        <td>Totalni iznos</td>
        <td>$ {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
    </div>
    <div>
    <form action='/orderplace' method="POST">
        @csrf
        <div class="form-group">
            <textarea name="address" placeholder="Unesite adresu" class="form-control"></textarea>
        <label for="pwd">Nacin placanja:</label><br><br>
        <input type="radio" value="cash" name="payment"><span>Online placanje</span><br><br>
        <input type="radio" value="cash" name="payment"><span>EMI placanje</span><br><br>
        <input type="radio" value="cash" name="payment"><span>Placanje pouzecem</span><br><br>
        </div>
    <button type="submit" class="btn btn-default">Naruci odmah</button>
    </form>
    </div>
@endsection
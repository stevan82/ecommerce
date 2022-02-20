@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="register" method="POST">
        @csrf
        <div class="form-group">                
            <label for="name">Ime i prezime:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">                
            <label for="email">Email addresa:</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Lozinka:</label>
           <input type="password" name="password" class="form-control" id="pwd">
        </div>  
        <button type="submit" class="btn btn-default">Registruj se</button>
        </form> 
        </div>
    </div>

</div>
@endsection
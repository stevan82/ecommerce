<?php 
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user')){
$total=ProductController::cartItem();
}
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">E-commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Naslovna</a></li>
      <li><a href="/myorders">Porudzbine</a></li>    
    </ul> 
    <form action="/search" class="navbar-form navbar-left">
    <div class="form-group">
    <input type="text" name="query" class="form-control search-box" placeholder="Pretrazi">
  </div>   
  <button type="submit" class="btn btn-default">Pretrazi</button>
</form>
<ul class="nav navbar-nav navbar-right">
<li><a href="/cartlist">Korpa:({{$total}})</a></li>
@if(Session::has('user'))
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Odjavite se</a></li>
        </ul>
</li>
@else
<li><a href="/login">Prijavite se</a></li>
<li><a href="/register">Registrujte se</a></li>
@endif
</ul>  
</div>
</nav>


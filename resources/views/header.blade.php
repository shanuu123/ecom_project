<?php
use App\Http\Controllers\Productcontroller;
$quantity=0;
if(Session::has('user'))
{
$quantity=Productcontroller::cartitem();
}

?>

     @if(Session::has('user'))

     <nav class="navbar navbar-expand-lg navbar-light bg-light cartquantity "   >
      <div class="ecom">
        <a class="navbar-brand" href="/">E-COMM</a>
      </div>
        <div class="bach-color">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse  " id="navbarSupportedContent ">
          <ul class="navbar-nav mr-auto">
            
          <div class="nav navbar-nav navbar-right  quantityclass">




     <li >
      <a class="nav-link" href="/orders">my orders</a>

    </li>
     <li> <a href="/cartlist">Cart(<span id="cart_qty">{{$quantity}}</span>)</a></li>
     <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{session::get('user')['name'] }}<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/logout">logout</a></li>
      </ul>
    </li>



    @else
    <nav class="navbar navbar-expand-lg navbar-light bg-light cartquantity "   >
      <div class="bach-color">
        <div class="collapse navbar-collapse  " id="navbarSupportedContent ">
          <ul class="navbar-nav mr-auto">
            
          <div class="nav navbar-nav navbar-right  quantityclass">
    <li><a href="/login">login</a></li>
    <li><a href="/registration">registration</a></li>
    <li> <a href="/adminlogin" id="addnewitems">admin page</a></li>
  
    @endif
@if(session::has('users'))





 <li class="dropdown"> 
  <a class="dropdown-toggle" data-toggle="dropdown" href="/log">logout {{Session::get('users')['name'] }}<span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="/log">logout</a></li>
  </ul>
</li> 
   @endif
    
      </div>
    </ul>
    </div>
  </div>
  </nav>




  

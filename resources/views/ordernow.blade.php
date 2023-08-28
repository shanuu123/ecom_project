@extends('master')
@section("content") 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
use App\Http\Controllers\Productcontroller;
$quantity=0;
if(Session::has('user'))
{
$quantity=Productcontroller::cartitem();
}
?>
<div class="custom-product">
     <!-- Wrapper for slides -->
      <div class="col-sm-5">
        <table class="table" style="bord">
            
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{ $total }}</td>
              </tr>
              <tr>
                <td>tax</td>
                <td>$ 20</td>
              </tr>
              <tr>
                <td>delivery charges</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>quantity</td>
                <td>{{$quantity}} items</td>
              </tr>
              <tr>
                <td>total amount</td>
                <td> $ {{$total+20+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
          <form action="/orderplace" method="post">
            @csrf
            <div class="form-group" style="background-color:red">
          
              <input  type="address" name="address"placeholder="enter the address"class="form-control">
            </div>
            <div class="form-group">
              <label for="pwd">payment method</label><br><br>
              <input type="radio" value="cash" name="payment"><span>Online payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>EMI payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>payment on delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-default">order now</button>
          </form>
          </div>
       </div>
</div>
@endsection
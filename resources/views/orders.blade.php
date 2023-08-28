@extends('master')
@section("content") 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="custom-product">
     <!-- Wrapper for slides -->
      <div class="col-sm-10">
        <div class="trending-wrapper">
           
            <h4 style="color: brown">My Orders</h4>
       @foreach ($orderdetail as $item)
     
         <div class="row searched-item cart-item-divider">
                    <div class="col-sm-3">
                     {{-- <a href="detail/{{$item->id}}"> --}}
                        <img  class="trending-image" src="{{ $item->gallery }}" >
                        </a>
                          <p style="margin:10%" class="brode"><span style="color: orange">{{ $loop->iteration.'/'.$loop->count}}</span></p>

                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <h2>{{ $item->name }}</h2>
                            <h5>. DISCRIPTION :{{ $item->discription}}</h5>
                            <h5>. payment status :{{ $item->payment_status}}</h5>
                            <h5>. payment method : {{ $item->payment_method}}</h5>
                            <h5>. price : {{ $item->price}}</h5>
                        </div>
                    </div>
                   
            
        </div>
        
       @endforeach 
        </div>
       </div>
</div>
@endsection
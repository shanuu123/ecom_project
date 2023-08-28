@extends('master')
@section("content")

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="" >
    <div class="row ">
        <div class="col-sm-6">
            
            <img class="detail-image" src="{{$product['gallery'] }}">
        </div>
        <div class="col-sm-6">
           <h2 >
             <div   id="success_message"   style="background-color: lightsalmon"></div></h2>
            {{-- <a href="/">Go back</a> --}}
            <h4>name :{{$product['name'] }}</h4>
            <h4>price :{{$product['price'] }}</h4>
            <h4>category :{{$product['category'] }}</h4>
            <h4>discription :{{$product['discription'] }}</h4>
            <br><br>
            {{-- <form action="/add_to" method="POST"> --}}
                @csrf
                <input type="hidden" id="value_of_cart_id" name="product_id" value={{ $product['id'] }}>
                <button class="btn btn-primary add_to_cart"   style="background-color: lightsalmon">Ad To Cart</button>
            {{-- </form> --}}
            <br><br>
            <a href="/">Go back</a>
            {{-- <button class="btn btn-success">Buy Product</button> --}}
            <br><br>
        </div>
    </div>


    <div class="modal fade" id="addcartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content">
            <div class="modal-header" style="background-color: lightsalmon">
              <h3 class="modal-title" id="exampleModalLabel">add cart verification</h3>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
      
                             
                         <input type="hidden" id="add_item_id" >
                         <h4>are you sure you want to add thi sitem into your cart items?if you want then confirm it</h4>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary addthecart" >confirm</button>
            </div>
          </div>
        </div>
      </div>






      <script>

       


       
        $(document).ready(function()
        {
          
            
        
            $('body').on('click','.add_to_cart',function(e)
            {
              
                e.preventDefault();
                var cart_id = $('#value_of_cart_id').val();
              
            $('#add_item_id').val(cart_id);
            $('#addcartmodal').modal('show');
        
  
         
            });
            
          
            
            $(document).on('click','.addthecart',function(e){
            e.preventDefault();
            var cart_id = $('#value_of_cart_id').val();
       
          $.ajaxSetup({
                    headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             }
                            });
    
        $.ajax({
            type:"POST",
            url:"/add-cart/"+cart_id,
            datatype:"json",
            success:function(response){
               $('#addcartmodal').modal('hide');
               $('#success_message').text(response.message)
               var existing_qty = $('#cart_qty').text();
               var new_qty = parseInt(existing_qty) + 1;
                $('#cart_qty').text(new_qty);
         
            }
        }); 
     
     });

   

   


    });
    </script>

@endsection

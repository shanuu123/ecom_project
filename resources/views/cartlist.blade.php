@extends('master')
@section("content") 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="custom-product" >

      <div class="col-sm-10"   >
        <h2> <div   id="success_message"></div></h2>
        <div class="trending-wrapper">
           <h4 style="color: brown;"><u>result for products</u></h4><br><br>
 

          
       @foreach ($products as $item)
         <div class="row searched-item cart-item-divider cart-item-{{ $item->cart_id }}">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                        <img  class="trending-image" src="{{ $item->gallery }}" >
                        </a>
                        <p style="margin:10%" class="brode"><span style="color: orange">{{ $loop->iteration}}</span></p>

                    </div>
                    <div class="col-sm-3">
                        <div class="">

                            <h2>{{ $item->name }}</h2>
                            <h5>{{ $item->discription}}</h5>
                         
                        </div>
                    </div>
                <div class="col-sm-3">
                   <div class="" style="text-align-last: center">
                   
                   <button  class="removeitemcart btn btn-warning" data-id={{ $item->cart_id}}>remove to cart</button>
                </div>
                </div>
        </div>
       @endforeach 
       <br><br>
       <a class="btn btn-success "href="ordernow">Order Now</a>
        </div>
       </div>
</div>
<div class="modal fade" id="removecartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header" style="background-color: lightsalmon">
          <h3 class="modal-title" id="exampleModalLabel" >delete cart verification</h3>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul id="updateform_errlist"></ul>
                         
                     <input type="hidden" id="delete_modal_item_id" >
                     <h4>are you sure you want to delete this item from your cartlist items?if you want then confirm it</h4>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary removeid">confirm</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function()
    {
   
        $(document).on('click','.removeitemcart',function(e)
        {
            e.preventDefault();
           var  cart_id = $(this).attr('data-id');
           $('#delete_modal_item_id').val(cart_id);
                $('#removecartmodal').modal('show');
             
                
    
        });
    
          
        $(document).on('click','.removeid',function(e){
                e.preventDefault();
                var  cart_id = $('#delete_modal_item_id').val();
            
          
              $.ajaxSetup({
                        headers: {
                                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                 }
                                });
        
            $.ajax({
                type:"delete",
                url:"/delete-cart/"+cart_id,
                success:function(response){
               
                  $('#success_message').addClass('alert alert-success');
                   $('#success_message').text(response.message)
                   $('#removecartmodal').modal('hide');
                   $('.cart-item-'+cart_id).remove();
                      var existing_qty = $('#cart_qty').text();
               var new_qty = parseInt(existing_qty) - 1;
                $('#cart_qty').text(new_qty);
         
                
             
                }
            }); 
         });
    });
    </script>

    @endsection
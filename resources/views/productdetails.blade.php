@extends('master')
@section("content")

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container shahan"   >
    <div class="split left" style="background-color:white">
      <?php
      static  $mobile="mobile";
      static $watches="watch";
       static $homeappliances="homeappliances";
       static $glasses="glasses";
       static   $gaming_accessories="gaming_accessories";
       static $beauty_product="beauty_product";
       
        ?>
       <h3> <a href="/productdetails"># all items</a></h3> 
     <h3> <a href="/productdetails/{{$watches}}"># watches</a></h3>
     <h3> <a href="/productdetails/{{$mobile}}"># mobile</a></h3>
      <h3><a href="/productdetails/{{$homeappliances}}"># homeappliances</a></h3>
      <h3><a href="/productdetails/{{$glasses}}"># glasses</a></h3>
      <h3><a href="/productdetails/{{$gaming_accessories}}"># gaming_accessories</a></h3>
      <h3><a href="/productdetails/{{$beauty_product}}"># beauty_product</a></h3>
      

      <div  >
        <img  style="width: 300px ;margin-bottom: 5px" src="https://www.nicepng.com/png/detail/114-1145508_free-home-delivery-png-graphic-free-delivery-boy.png">
      </div>
      <div  >
        <img  style="width: 300px ;margin-bottom: 5px " src="https://images.unsplash.com/photo-1547452912-b43d586aed93?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YWR2ZXJ0aXNlbWVudHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60">
      </div>
      <div  >
          <img  style="width: 300px  ;margin-bottom: 5px" src="https://img.freepik.com/premium-photo/advertising-media-web-concept_700248-21234.jpg?w=2000">
      </div>
    </div>
</div>


     <div class="splitt right" style="background-color: lavender ">
      
   
  
      <div class="container mt-2">
          <div classs="form-group">
              <input type="text" id="search" name="search" placeholder="enter the name of the product" class="form-control searchbar" />
              <button class="btn btn-outline-success my-2 my-sm-0 searching-product" type="submit">Search</button>
          </div>
      </div>
      <br><br>
   
      <div id="products">
   @foreach ($products as $items)
   <div class="col-md-4" >
    <div class="card" style="margin: 2%">
      <a href="/detail/{{$items['id']}}">
      <img class="card-img-top"  style="height: 250px ; object-fit:contain" src={{ $items['gallery'] }} alt="watches">
      <div class="card-body" style="color:black ; height:120px" >
        <h5 class="card-title " style="font-size: 200%">{{ $items['name'] }}</h5>
        <p class="card-text">{{$items['discription']}}</p>
        
      </div></a>
    </div>

  </div>
  @endforeach
  
</div>
</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
   
     <script type="text/javascript">
        var route="{{ url('autocomplete-search') }}";
        $('#search').typeahead({
          source:function(query,process){
            return $.get(route,{
              query:query
            },
            function(data){
              return process(data);
            });
          }
        });
      </script>

<script>   
$(document).ready(function()
{
  

$(document).on('click','.searching-product',function(e){
  e.preventDefault();
  var searching= $('#search').val();

$.ajaxSetup({
          headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
                  });

$.ajax({
  type:"post",
  url:"/productdetails/"+searching,
  datatype:"json",
  success:function(response){
 $('#products').html(response);
   
  }
}); 

});






});
</script>
@endsection



@extends('master')
@section("content") 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<div class="borderss">
  <h6>""</h6>
</div>


<div class="custom-product ">
  
    <div id="myCarousel" class="carousel slide  border_color" data-ride="carousel" st>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
       @foreach ($products as $item)
    
        <div class="item {{$item['id']==3?'active':''}}">
          <a href="detail/{{$item['id']}}">
          <img  class="slider-img" src={{ $item['gallery'] }} >
          <div class="carousel-caption " >
            <h3>{{ $item['name'] }}</h3>
            <p>{{ $item['discription'] }}</p>
          </div>
          </a>
        </div>
  @endforeach
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="bordersss">
      <h6>""</h6>
    </div>
   




    <div class="trending-product" >
      <h1 style="color: lightsalmon">Different products categories</h1>

 {{-- CARDS --}}



<div class="row">
  <?php
  static  $mobile="mobile";
  static $watches="watch";
   static $homeappliances="homeappliances";
   static $glasses="glasses";
   static   $gaming_accessories="gaming_accessories";
   static $beauty_product="beauty_product";
    ?>
  <div class="col-md-4">
    <div class="card"  style="margin: 2%">
    <a href="/productdetails/{{$watches}}"  >
      <img class="card-img-top" style="height: 250px"src="https://cdn4.ethoswatches.com/the-watch-guide/wp-content/uploads/2020/10/Masthead-Desktop@1.6x-2-2048x796.jpg" alt="watches">
      <div class="card-body" style="color:black">
        <h5 class="card-title" style="font-size: 200%">WATCHES</h5>
        <p class="card-text">ther are lot of watches in our selling list.lot of different color watchs with extreme grace.beautiful look</p>
        
      </div></a>
    </div>

  </div>

  <div class="col-md-4" style="height: 200px">
    <div class="card" >
      <a href="/productdetails/{{$homeappliances}}">
      <img class="card-img-top"  style="height: 250px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQsSbOjsjm5gD7nXqThblfbiF2lus_l31zJA&usqp=CAU">
      <div class="card-body" style="color:black">
        <h5 class="card-title" style="font-size: 200%">HOME APPLIANCES</h5>
        <p class="card-text">ther are lot of electrical home appliances in our selling list.lot of different functionalities with extreme grace.beautiful look</p>
       
      </div></a>
    </div>

  </div>
  <div class="col-md-4">
    <div class="card" >
      <a href="/productdetails/{{$mobile}}">
      <img class="card-img-top"  style="height: 250px" src="https://assets.thehansindia.com/h-upload/2022/04/30/1600x960_1289668-mobiles-11.jpg" alt="watches">
      <div class="card-body" style="color:black">
        <h5 class="card-title" style="font-size: 200%">MOBILES</h5>
        <p class="card-text">ther are lot of mobiles in our selling list.lot of different color mobiles with extreme grace.beautiful look</p>
        
      </div></a>
    </div>

  </div>
  <div class="col-md-4">
    <div class="card" >
      <a href="/productdetails/{{$glasses}}">
      <img class="card-img-top" style="height: 250px"  src="https://media.cnn.com/api/v1/images/stellar/prod/glasses-group-2.jpg?c=16x9&q=h_720,w_1280,c_fill/f_webp" alt="watches">
      <div class="card-body" style="color:black">
        <h5 class="card-title" style="font-size: 200%">GLASESS</h5>
        <p class="card-text">there are lot of galsses in our selling list.lot of different  frame colors with extreme grace.beautiful look</p>
        
      </div></a>
    </div>

  </div>
  <div class="col-md-4">
    <div class="card" >
      <a href="/productdetails/{{$beauty_product}}">
      <img class="card-img-top"  style="height: 250px" src="https://img.freepik.com/free-photo/flat-lay-natural-self-care-products-composition_23-2148990019.jpg?w=2000" alt="watches">
      <div class="card-body"  style="color:black">
        <h5 class="card-title" style="font-size: 200%">BEAUTY PRODUCTS</h5>
        <p class="card-text">ther are lot of different beauty products in our selling list.that make angels from ghost .</p>
       
      </div></a>
    </div>

  </div>
  <div class="col-md-4">
    <div class="card" >
<a href="/productdetails/{{$gaming_accessories}}">
      <img class="card-img-top"  style="height: 250px" src="https://img.freepik.com/premium-photo/gaming-desk-yellow-background_160097-288.jpg" alt="watches">
      <div class="card-body" style="color:black ">
        <h5 class="card-title" style="font-size: 200%">GAMING ACCESSORIES</h5>
        <p class="card-text">ther are lot of gaming accessories in our selling list.lot of different color with different functionalities with extreme grace.beautiful look</p>
     
      </div>
</a>
    </div>

  </div>
</div>



 
{{-- ENDCARD --}}









    
 {{-- startofadditem --}}
 <div class="modal fade" id="addthenewitem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add student</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                           <ul id="saveform_errlist"></ul>
        
          <div class="form-group mb-3">
          <label for="">name</label>
          <input type="text" class="name form-contol">
        </div>
        <div class="form-group mb-3">
          <label for="">category</label>
          <input type="text" class="category form-contol">
        </div>
        <div class="form-group mb-3">
          <label for="">price</label>
          <input type="text" class="price form-contol">
        </div>
        <div class="form-group mb-3">
          <label for="">image</label>
          <input type="text" class="gallery form-contol">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_item">Save </button>
      </div>
    </div>
  </div>
</div>
{{-- endofadditem --}}
@endsection
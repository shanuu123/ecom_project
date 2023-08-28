
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
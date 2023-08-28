@extends('master')
@section("content") 



<div class="bg-ima" style="background-image: url('https://e0.pxfuel.com/wallpapers/677/189/desktop-wallpaper-the-most-important-e-commerce-marketing-trends-of-the-e-commerce-e-commerce.jpg');">

<div class="container admin-login">
    <div class="row">
        <div class="col-sm-4">
          <div id="success_message"></div>
            <form action="addnewitem" method="post">
                @csrf
                <ul id="saveform_errlist"></ul>
          <h2 style="color: lightsalmon">add item details</h2><br><br>
          
                <div class="form-group row">
                  <label style="color:lightsalmon"><h3>category</h3></label>
                  <div class="col-sm-10">
                  <select name="category" class="category form-control" >
                  <option>--</option>
                  <option value="mobile">mobile</option>
                  <option value="watch">watch</option>
                  <option value="homeappliances">homeappliances</option>
                  <option value="glasses">glasses</option>
                  <option value="beauty_product">beauty product</option>
                  <option value="gaming_accessories">gaming accessories</option>
                  
                  </select>
                  </div>
                </div>
               
                <div class="form-group row" >
                  <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>item name</h3></label>
                  <div class="col-sm-10">
                    <input type="name" name="name" class="itemname form-control" id="input1">
                  </div>
                </div>
               
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>item image url</h3></label>
                  <div class="col-sm-10">
                    <input type="url" name="image" class="itemurl form-control" id="input2">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>discription</h3></label>
                  <div class="col-sm-10">
                    <input type="text" name="discription" class="discription form-control" id="input3">
                  </div>
                </div>

            
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>price</h3></label>
                  <div class="col-sm-10">
                    <input type="number"  name="price" class="price form-control" id="input4">
                  </div>
                </div>
            
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="add_items btn btn-primary"><h2>add item</h2></button>
                  </div>
                </div>
         
              </form>
        </div>
    </div>
</div>
</div>
<script>
$(document).ready(function(){

$(document).on('click','.add_items',function(e){
            e.preventDefault();
            var data={
                'category':$('.category').val(),
                'price':$('.price').val(),
                'discription':$('.discription').val(),
                'image':$('.itemurl').val(),
               'name':$('.itemname').val(),
            }
          // console.log(data);
          $.ajaxSetup({
                    headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             }
                            });

        $.ajax({
            type:"POST",
            url:"/addnewitem",
            data:data,
            datatype:"json",
            success:function(response){
              if(response.status==200){
                $('#saveform_errlist').html("");
               $('#input1').val("");
               $('#input2').val("");
               $('#input3').val("");
               $('#input4').val("");
                
                $('#success_message').addClass("alert alert-success");
                $('#success_message').text(response.message)
              }
              else{
                $('#success_message').text("")
                 $('#saveform_errlist').html("");
                $('#saveform_errlist').addClass("alert alert-warning");
                $.each(response.errors,function (key, err_values){
                    $('#saveform_errlist').append('<li>'+err_values+'</li>');
                });
              }
            
            }
    });    
  });
});
</script>
@endsection


<style>
  /* body {
  width: 100%;
  height: 100vh;
  margin: 0;
  padding: 0;
} */
.bg-ima {
  width: 100%;
  height: 100%;
 
  background-position:center;
  background-size: cover;
}
</style>

@extends('master')
@section("content") 

<div class="bg-image" style="background-image: url('https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=600');">
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4">
          <div id="success_message"></div>
            <form action="/registration" method="POST">
                @csrf
                <ul id="saveform_errlist"></ul>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>name</h3></label>
                    <div class="col-sm-10">
                      <input type="name" name="name" class="username form-control" id="inputn">
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>Email</h3></label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="useremail form-control" id="inputE">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label"  style="color:lightsalmon"><h3>Password </h3></label>
                  <div class="col-sm-10">
                    <input type="password"  name="password" class="userpassword form-control" id="inputP">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="add_user btn btn-primary"><h2>User Registration</h2></button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>

<script>
  $(document).ready(function(){
  
  $(document).on('click','.add_user',function(e){
              e.preventDefault();
              var data={
                  'password':$('.userpassword').val(),
                 'name':$('.username').val(),
                 'email':$('.useremail').val(),
              }
            // console.log(data);
            $.ajaxSetup({
                      headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                               }
                              });
  
          $.ajax({
              type:"POST",
              url:"/registration",
              data:data,
              datatype:"json",
              success:function(response){
                if(response.status==200){
                  $('#saveform_errlist').html("");
                 $('#inputn').val("");
                 $('#inputE').val("");
                 $('#inputP').val("");
                  
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

.bg-image {
  width: 100%;
  height: 70%;
 
  background-position:center;
  background-size: cover;
}
</style>
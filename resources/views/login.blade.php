@extends('master')
@section("content") 


<div class="bg-image" style="background-image: url('https://i0.wp.com/www.unionsquaredesign.com/wp-content/uploads/2018/06/e-commerce-images.jpg?ssl=1');">



<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4">
            <form action="login" method="POST">
                <div class="form-group row">
                    @csrf
                  <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>Email</h3></label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>Password</h3> </label>
                  <div class="col-sm-10">
                    <input type="password"  name="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"><h2>user login</h2></button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
</div>

<style>
  /* body {
  width: 100%;
  height: 100vh;
  margin: 0;
  padding: 0;
} */
.bg-image {
  width: 100%;
  height: 100%;
 
  background-position:center;
  background-size: cover;
}
</style>
@endsection

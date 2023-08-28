@extends('master')
@section("content")

<div class="bg-imag" style="background-image: url('https://c8.alamy.com/comp/JXPC8E/angola-high-resolution-e-commerce-concept-JXPC8E.jpg');">
<div class="container admin-login">
    <div class="row">
        <div class="col-sm-4">
            <form action="adminlogin" method="post"  >
                <div class="form-group row">
                    <div class="success_message"></div>
                    @csrf
                  <label for="inputEmail3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>Email</h3></label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="email form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label" style="color:lightsalmon"><h3>Password </h3></label>
                  <div class="col-sm-10">
                    <input type="password"  name="password" class="password form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="admin_login_btn   btn btn-primary"><h2>Admin login</h2></button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
</div>


@endsection


<style>

.bg-imag {
  width: 100%;
  height: 100%;
 
  background-position:center;
  background-size: cover;
}
</style>
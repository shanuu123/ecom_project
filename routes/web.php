<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Productcontroller;



Route::get('/autocomplete-search', [Productcontroller::class, 'autocompleteSearch']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
        Session::forget('user');
    return redirect('login');
});


Route::get('/log', function () {

Session::forget('users');
return redirect('login');
});



Route::view('registration',"registration");
Route::post("registration",[Usercontroller::class,'registration']);
Route::post("/login",[Usercontroller::class,'login']);
Route::get("/",[Productcontroller::class,'index']);

//Route::POST("add_to",[Productcontroller::class,'addtocart']);
Route::get("cartlist",[Productcontroller::class,'cartlist']);
Route::get("removecart/{id}",[Productcontroller::class,'removecart']);
Route::get("ordernow",[Productcontroller::class,'ordernow']);
Route::post("orderplace",[Productcontroller::class,'orderplace']);
Route::get("orders",[Productcontroller::class,'orders']);
Route::post("add-cart/{id}",[Productcontroller::class,'addthecart']);
Route::delete("delete-cart/{id}",[Productcontroller::class,'deleting']);
Route::delete("search",[Productcontroller::class,'productsearching'])->name('search');
Route::view("addnewitem","addnewitem");
route::post('addnewitem',[Productcontroller::class,'store']);
Route::view('adminlogin','adminlogin');
route::post('/adminlogin',[Usercontroller::class,'adminfunction']);
Route::view("productdetails","productdetails");
Route::get("productdetails",[Productcontroller::class,'data']);
Route::get("productdetails/{mobile}",[Productcontroller::class,'data1']);
Route::get("productdetails/{watches}",[Productcontroller::class,'data2']);
Route::get("productdetails/{homeappliances}",[Productcontroller::class,'data3']);
Route::get("productdetails/{glasses}",[Productcontroller::class,'data4']);
Route::get("productdetails/{aming_accessories}",[Productcontroller::class,'data5']);
Route::get("productdetails/{beauty_product}",[Productcontroller::class,'data6']);
Route::get("detail/{id}",[Productcontroller::class,'details']);
Route::get('/autocomplete-search',[Productcontroller::class,'autocompleteSearch']);

Route::post("productdetails/{name}",[Productcontroller::class,'searching']);
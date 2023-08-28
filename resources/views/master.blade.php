<!DOCTYPE html>
<html lang="{{ 
str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm project</title>
  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name','laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
</head>
<body>  
   
       {{ View::make('header') }}
     @yield('content')
      {{ View::make('footer') }} 

</body>
<style>
    .borders{
        border-style:solid;
        border-color:rgba(0, 0, 0, 0.503);
        border-width:thick;
        /* background-color: rgba(0, 0, 0, 0.503);         */
    }
    .brode{
        font-size: 200%;
    }
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px;
    }
    .trending-image{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 32%;
    }
    .trending-product{
        margin: 30px;
    }
    .trending-prod{
        margin: 30px;
    }
    .detail-image{
        height: 300px;
    }
    .navbar-right{
        text-align: right;
    }
    .cart-item-divider{
        border-bottom: 5px solid #ccc;
        margin-bottom: 20px;
    }
    .bach-color{
        background-color:lightgray;
    }
    .ecom{
        background-color:lightsalmon;
    }
    .trending-name{
        background: lightgray;
       
    }
    .trending-panel{
        background:lightgray;
    }
    .borderss{
       background:  rgba(0, 0, 0, 0.501);
    }
    .bordersss{
       background:  rgba(0, 0, 0, 0.503);
    }
    .borderssss{
       background: palevioletred;
    }
    .bordersssss{
       background:  palevioletred;
    }

    .split {
      height:auto;
      width: 20%;
      position:absolute;
      z-index: 1;
      top: 100px;
      /* overflow-x: hidden; */
      /* padding-top: 20px; */
    }
    .splitt {
      height:auto;
      width: 80%;
      position:absolute;
      z-index: 1;
      top: 100px;
      /* overflow-x: hidden; */
      /* padding-top: 20px; */
    }
    
    .left {
      left: 0;
      /* background-color: #111; */
    }
    
    .right {
      right: 0;
      /* background-color: red; */
    }
    


    
    .container {
        max-width: 100%;
    }
/* 
    .searchbar {
                position: absolute;
                top: 100px;
                left: 575px;
                height: 50px;
                width: 50px;
            } */

   </style>
@extends('master/master')
@section("content")



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('Frontend/login/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('Frontend/login/css/owl.carousel.min.css')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('Frontend/login/css/bootstrap.min.css')}}">
  
  <!-- Style -->
  <link rel="stylesheet" href="{{asset('Frontend/login/css/style.css')}}">

  <title>Login #4</title>
</head>
<body>
  {{-- {{asset('Frontend/ ')}} --}}

<div class="d-md-flex half">
  <div class="bg" style="background-image: url('{{asset('Frontend/login/images/bg_1.jpg')}}');"></div>
  <div class="contents">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="form-block mx-auto">
            <div class="text-center mb-5">
            <h3>Login to <strong>Book Shop</strong></h3>
            <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
            </div>
            <form action="login" method="post">
                @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="your email" id="email" name="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
              </div>
              
              <div class="d-sm-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
<br>
            <span class="ml-auto"><a href="registration" class="forgot-pass">Sign up</a></span> 
          </div>
        </div>
      </div>
    </div>
  </div>

  
</div>
  
  

  <script src="{{asset('Frontend/login/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('Frontend/login/js/popper.min.js')}}"></script>
  <script src="{{asset('Frontend/login/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('Frontend/login/js/main.js')}}"></script>



@endsection
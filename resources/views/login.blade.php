@extends('layout/layout')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginbox.css">
    <title>Login</title>
</head>

<body>

    <div class="site-wrap">
        <div class="site-navbar mt-4">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-4">
                        <h1 class="mb-0"><a href="index" class="text-white h2 mb-0"><strong>Event0<span
                                        class="text-primary">.com</span></strong></a></h1>
                    </div>
                    <div class="col-4 col-md-4 col-lg-8">
                        <nav class="site-navigation text-right text-md-right" role="navigation">
                            <ul class="site-menu mt-2">
                                <li><a href="signUp">Register</a></li>
                            </ul>
                        </nav>
                    </div>

                    {{-- <div class="col-4 col-md-4 col-lg-8">
                     
  
                          <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                  class="site-menu-toggle js-menu-toggle text-white"><span
                                      class="icon-menu h3"></span></a></div>
  
                          <ul class="site-menu js-clone-nav d-none d-lg-block">
                              <li class="active">
                                  <a href="index">Home</a>
                              </li>
                             
                           
                              <li><a href="events">Events</a></li>
                              
                              <li><a href="contact">Contact</a></li>
                              
                          </ul>
                      </nav>
                  </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar-1 --}}
    <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_4.jpg');"></div>



    <!-- login 1 -->

    <form class="box" action="login" method="post">
        {{@csrf_field()}}
        <h1>Login</h1>
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="login">
        <label class="label-agree-term"><a href="/forgot-password" class="text-white">Forgot Password?</a></label>
    </form>
    <!-- login 1 -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>

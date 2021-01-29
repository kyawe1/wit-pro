<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">

  <title>MakeProfile</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{asset('css/newmakeprofile.css')}}">

</head>

<body>

  <div class="top">

    <span class="dropdown">


      <i class="fa fa-bars" aria-hidden="true" id="dot3" onclick="myFunction()"></i>



      <div id="myDropdown" class="dropdown-content">

        <input type="checkbox" id="toggle1" class="acc1" hidden>

        <label for="toggle1" name="toggle" id="toggle1" onclick="mySecond()"> Account Setting</label>
        <hr>



        <div id="dropdown-contentsss" class="dropdown-contentss">

          <a href="#">Change Personal Information</a>
          <hr>
          <a href="#">Change Password</a>
          <hr>
          <a href="#">Reselect Categories</a>
          <hr>

        </div>


        <a href="#">Saved Posts</a>
        <hr>
        <a href="#">Make a profile</a>
        <hr>
        <a href="#">Report a problem</a>
        <hr>
        <a href="#">Logout</a>
        <hr>
      </div>

    </span>
    <div class="logo">

      <text> WIT Project</text>
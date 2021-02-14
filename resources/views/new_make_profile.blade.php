@extends('layouts/app')
@section('home')
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel='shortcut icon' href='{{asset("icons/Premier logo (white)")}}'>
  <title>NewMakeProfile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="{{asset('newmakeprofile.css')}}" />
</head>

<body>
  <header class="top">
    <div class="logo">WIT Project</div>

    <div class="search box">
      <i class="fa fa-search"></i>
      <input type="text" placeholder="Search" class="search-box" />
    </div>
    <span class="dropdown">
      <i class="fa fa-bars" aria-hidden="true" id="dot3" onclick="myFunction()"></i>

      <div id="myDropdown" class="dropdown-content">
        <input type="checkbox" id="toggle1" class="acc1" hidden />

        <label for="toggle1" name="toggle" id="toggle1" onclick="mySecond()">
          Account Setting</label>
        <hr />

        <div id="dropdown-contentsss" class="dropdown-contentss">
          <a href="#">Change Personal Information</a>
          <hr />
          <a href="#">Change Password</a>
          <hr />
          <a href="#">Reselect Categories</a>
          <hr />
        </div>

        <a href="#">Saved Posts</a>
        <hr />
        <a href="#">Make a profile</a>
        <hr />
        <a href="#">Report a problem</a>
        <hr />
        <a href="#">Logout</a>
        <hr />
      </div>
    </span>
  </header>
  <div class="profileform">
    <div class="form">
    <form method="post" action="{{route('c_profile')}}" class='make_profile'>
        @csrf
        <div class="file-chooser" id='file-chooser'>
          <img src='' alt='' style='width:100%;display:none;border-radius: 50%;border:solid 3px #808080;' id='preview'>
          <i class="fa fa-plus-circle" id="plus"></i>
          <comment class="sen" id='san'>Add a photo</comment>
        </div>
        <input type='file' name='photo' style='display:none;' id='photo'>
        <input type="text" name='job' placeholder="Jobs" required="required" /><br />

        <input type="text" name='location' placeholder="Location" required="required" /><br />

        <input type="text" name='bio' placeholder="Bio" required="required" /><br />

        <input type="text" placeholder="Phone Number" name='phno' required="required" /><br />

        <input type="text" placeholder="Date Of Birth" name='dob' required="required" /><br />
        <input type="submit" value="Make Profile" class="btn" />
      </form>

  <script src='{{asset("js/make_new_profile.js")}}'></script>
</body>

</html>

@endsection
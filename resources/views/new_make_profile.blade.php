@extends('layouts/app')
@section('new_make_profile')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>NewMakeProfile</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="newmakeprofile.css" />
  </head>
  <body>
    <header class="top">
      <div class="logo">WIT Project</div>

      <div class="search box">
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search" class="search-box" />
      </div>
      <span class="dropdown">
        <i
          class="fa fa-bars"
          aria-hidden="true"
          id="dot3"
          onclick="myFunction()"
        ></i>

        <div id="myDropdown" class="dropdown-content">
          <input type="checkbox" id="toggle1" class="acc1" hidden />

          <label for="toggle1" name="toggle" id="toggle1" onclick="mySecond()">
            Account Setting</label
          >
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
        <form method="get" action="" class='make_profile'>
          <div class="file-chooser">
            <i class="fa fa-plus-circle" id="plus"></i
            ><comment class="sen">Add a photo</comment>
          </div>
          <input type="text" placeholder="Jobs" required="required" /><br />

          <input type="text" placeholder="Location" required="required" /><br />

          <input type="text" placeholder="Bio" required="required" /><br />

          <input
            type="text"
            placeholder="Phone Number"
            required="required"
          /><br />

          <input
            type="text"
            placeholder="Date Of Birth"
            required="required"
          /><br />
          <a href="category.html">
            <input type="submit" value="Make Profile" class="btn" />
          </a>
        </form>
      </div>
    </div>

    <script>
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      window.onclick = function (event) {
        if (!event.target.matches("#dot3")) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
              openDropdown.classList.remove("show");
            }
          }
        }
      };
      function mySecond() {
        document
          .getElementById("dropdown-contentsss")
          .classList.toggle("shows");
      }

      window.onclick = function (event) {
        if (!event.target.matches("#toggle1")) {
          var dropdowns = document.getElementsByClassName("dropdown-contentss");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("shows")) {
              openDropdown.classList.remove("shows");
            }
          }
        }
      };
    </script>
  </body>
</html>

  @endsection
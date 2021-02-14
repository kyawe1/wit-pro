<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>Make Profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/updateprofile.css')}}">

</head>

<body>

    <header class="top">

        <div class="logo">

            <img src="Premier%20logo%20(white).svg" class="gg">

        </div>

        <div class="search">

            <i class="fa fa-search"></i>

            <input type="text" placeholder="Search" class="box">

        </div>

        <div class="menuspace">

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
        </div>
    </header>

    <div class="profileform">
        <div class="form">
            <form method="post" action="{{route('c_profile')}}" class='make_profile'>
                @csrf
                <div class='filechooser-container'>
                <img src='{{asset("icons/dog.jpg")}}'  class='pic1' id='preview'>
                <div class="file-chooser-updated" id='file-chooser'>
                    <i class="fa fa-plus-circle" id="plus"></i>
                    <comment class="sen" id='san'>Add a photo</comment>
                </div>
                </div>
                <input type='file' name='photo' style='display:none;' id='photo' value=''>
                <input type="text" name='job' placeholder="Jobs" required="required" value='{{request()->user()->job_name}}' /><br />

                <input type="text" name='location' placeholder="Location" required="required" value='{{request()->user()->job_location}}' /><br />

                <input type="text" name='bio' placeholder="Bio" required="required" value='{{request()->user()->bio}}' /><br />

                <input type="text" placeholder="Phone Number" name='phno' required="required" value='{{request()->user()->phonenumber}}' /><br />

                <input type="text" placeholder="Date Of Birth" name='dob' required="required" value='{{request()->user()->date_of_birth}}' /><br />
                <input type="submit" value="Update Profile" class="btn" />
            </form>

        </div>




    </div>
    <script src="{{asset('js/make_new_profile.js')}}"></script>

</body>

</html>
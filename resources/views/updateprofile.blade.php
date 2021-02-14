<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>Make Profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="updateprofile.css">

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

            <img src="dog.jpg" class="pic1">

            <a href="#"><i class="fa fa-plus-circle" id="plus"></i>
                <comment class="sen">Change Photo</comment>
            </a>



            <input type="text" placeholder="Jobs" required="required"><br />

            <input type="text" placeholder="Location" required="required"><br />

            <input type="text" placeholder="Bio" required="required"><br />

            <input type="text" placeholder="Phone Number" required="required"><br />


            <input type="text" placeholder="Date Of Birth" required="required"><br />

            

        </div>




    </div>
    <script src="{{asset('js/make_new_profile.js')}}"></script>

</body>

</html>
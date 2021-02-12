@extends('layouts/app')
@section('signin')
<div class="Head">

    </div>


    <div class="img">
        <img src="icons/SignIn.png">
    </div>



    <div class="Box">

        <h2>Please Fill Your Information</h2>

        <div>
            <input type="text" placeholder="E-mail" class="box_diff">
        </div>

        <div>
            <input type="password" placeholder="Password" class="box_diff" id="myInput">
            <span onclick="myFunction()">
                        <i class="fa fa-eye eye" id="hidden1"></i>
                        <i class="fa fa-eye-slash eye" id="hidden2" ></i>
        
            </span>
        </div>

        <div>
            <a href=""> <input type="button" value="Sign In" class="SignIn_button"></a>
        </div>


        <div class="content">

            <p>Doesn't have an account.Sign Up <a href="{{url('register')}}">Here</a></p>

        </div>
    </div>
    <script>
        function myFunction() {

            var x = document.getElementById("myInput");
            var y = document.getElementById("hidden1");
            var z = document.getElementById("hidden2");

            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "grid";
                z.style.display = "none";
            } else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }

        }
    </script>
</body>


@endsection
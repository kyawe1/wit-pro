@extends('layouts/app')
@section('signin')
<div class="Head">

    </div>


    <div class="img">
        <img src="icons/SignIn.png">
    </div>



    <div class="Box">
        <form action="{{url('login')}}" method="post">
        @csrf
        <h2>Please Fill Your Information</h2>

        <div>
            <input type="text" placeholder="E-mail" class="box_diff" name='email'>
        </div>

        <div>
            <input type="password" placeholder="Password" class="box_diff" id="myInput" name='password'>
            <span onclick="myFunction()">
                        <i class="fa fa-eye eye" id="hidden1"></i>
                        <i class="fa fa-eye-slash eye" id="hidden2" ></i>
        
            </span>
        </div>

        <div>
             <button type='submit' class='SignIn_button'>
                {{ __('Login') }}
             </button>
        </div>


        <div class="content">

            <p>Doesn't have an account.Sign Up <a href="{{url('register')}}">Here</a></p>

        </div>
    </div>
    </form>
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
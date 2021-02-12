@extends('layouts/app')
@section('signup')
<div class="Head">

</div>
<div class="img">
    <img src="icons/SignUp.png">
</div>

<div class="Box">
<form action="http://localhost:8000/register" method="post" >
    <h2>Please Fill Your Information</h2>
    
   @csrf
    <div>
        <input type="text" placeholder="Username" class="box_diff" name="username">
    </div>
    
<div>   
    <input type="text" placeholder="E-mail" class="box_diff" name="email">
</div>
    
    
<div>
<input type="password" placeholder="Password" class="box_diff" id="myInput1" name="pw">
    <span  onclick="myFunction1()">
        <i class="fa fa-eye eye" id="hidden1"></i>
            <i class="fa fa-eye-slash eye" id="hidden2" ></i>   
    </span>
</div>
    
<div>
<input type="password" placeholder="Confirm Password" class="box_diff" id="myInput2" name="cpw">
    <span  onclick="myFunction2()">
        <i class="fa fa-eye eye" id="hidden3"></i>
            <i class="fa fa-eye-slash eye" id="hidden4" ></i>
    
    </span>
</div>
    
<div>
    <input type="submit" value="Sign Up" class="SignUp_button">
</div>

    <div class="content">
    
    <p>Already have an account?Sign In <a href="{{url('login')}}">Here</a></p>

</div>
    
</div>
</form>
<script>
    function myFunction1(){
        var x=document.getElementById("myInput1");
        var y=document.getElementById("hidden1");
        var z=document.getElementById("hidden2");
        
        if(x.type === 'password'){
            x.type="text";
            y.style.display="block";
            z.style.display="none";
        }
        else{
                x.type="password";
            y.style.display="none";
            z.style.display="block";
        }
        
    }
    function myFunction2(){
        var a=document.getElementById("myInput2");
        var b=document.getElementById("hidden3");
        var c=document.getElementById("hidden4");
        
        if(a.type === 'password'){
            a.type="text";
            b.style.display="block";
            c.style.display="none";
        }
        else{
                a.type="password";
            b.style.display="none";
            c.style.display="block";
        }
        
    }
</script>
</script>

@endsection
@extends('layouts/app')
@section('catagory')
<header class="top">
<div class="logo">
        <img src="icons/Premier%20logo%20(white).svg" class="gg">
                
      </div>
    </header>
    <div class="boy">
        <div class="girl">
            <img src="icons/Category.png" width="100%" height="100%" />
        </div>
        <div class="form">
            <form method="get" action="">
                <div class="inside">
                    <h1>Choose Three Categories</h1>

                    <input type="button" value="Technology" id="tch" name="btnTech"/>

                    <input type="button" value="Science" id="sc" name="btnTech"/>

                    <input type="button" value="Education" id="edu" name="btnTech"/>

                    <input type="button" value="Health" id="he" name="btnTech"/>

                    <input type="button" value="Fintness" id="fn" name="btnTech"/>

                    <input type="button" value="Entertainment" id="etn" name="btnTech"/>

                    <input type="button" value="Sports" id="sp" name="btnTech"/>

                    <input type="button" value="Finances" id="fnc" name="btnTech"/>

                    <input type="button" value="Commerce/Economic" id="ce" name="btnTech"/>

                    <input type="button" value="Agriculture" id="agr" name="btnTech"/>

                    <input type="button" value="Travel" id="tv" name="btnTech"/>

                    <input type="button" value="Culture" id="cu" name="btnTech"/>

                    <input type="button" value="Nature" id="nu" name="btnTech"/>

                    <input type="button" value="Art" id="art" name="btnTech"/>

                    <input type="button" value="Photography" id="pth" name="btnTech"/>

                    <input type="button" value="fashion" id="fs" name="btnTech"/>

                    <input type="button" value="Politics" id="plt" name="btnTech"/>

                    <input type="button" value="Others" id="os" name="btnTech"/>

                    <br />

                    <input type="button" value="Confirm" id="btn" />
                </div>
            </form>
        </div>
    </div>
<script>
 var btn=document.getElementsByName('btnTech');
 btn.forEach(buttonFuntion);
 function buttonFuntion(btn){
        btn.onclick=function(){
        btn.style.backgroundColor=" #186871";
    };
    btn.ondblclick=function(){
        btn.style.backgroundColor='snow';
    };
    // btn.onmouseover=function(){
    //         btn.value=btn.getElementsByName('btnTech');
    //     };
 }
</script>
@endsection
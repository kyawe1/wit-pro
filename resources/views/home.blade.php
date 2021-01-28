@include('parts/head')

<div class="dog">
    <img src="{{asset('picture/Home.png')}}" width=100% height=100%>
    <div class="form">
        <div>
            <div class="inside">
                <text id="tt">What is WIT project?</text>
                <br />
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <br />
                <a href="{{route('register')}}"><button  value="Sign Up" id="btn1">Sign Up</button></a>
                <a href="{{route('login')}}"><button  value="Sign In" id="btn2">Sign In</button></a>

            </div>
        </form>




    </div>
</div>
</div>
</div>
</body>

</html>
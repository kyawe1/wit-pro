@include('parts/login_user_head')
<div class="search">

    <i class="fa fa-search"></i>

    <input type="text" placeholder="Search" class="box">



    <div class="profileform">

        <form method="get" action="">

            <div class="form">

                <a href=" "><img scr="" class="dog"><i class="fa fa-plus-circle" id="plus"></i>
                    <comment class="sen">Add a photo</comment>
                </a>



                <input type="text" placeholder="Jobs" required="required"><br />

                <input type="text" placeholder="Location" required="required"><br />

                <input type="text" placeholder="Bio" required="required"><br />

                <input type="text" placeholder="Phone Number" required="required"><br />


                <input type="text" placeholder="Date Of Birth" required="required"><br />

                <text class="comment">Enter Your Email and Password again for comfirmation</text>

                <input type="text" placeholder="Email" required="required"><br />


                <input type="password" placeholder="Password" required="required"><br />

                <a href="category.html"><input type="button" value="Make Profile" class="btn"></a>

            </div>


        </form>

    </div>



</div>
</div>
</div>

<script src='{{asset("js/make_new_profile.js")}}'></script>
</body>

</html>
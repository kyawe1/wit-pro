@include('parts/login_user_head')
<div class="search">

    <i class="fa fa-search"></i>

    <input type="text" placeholder="Search" class="box">



    <div class="profileform">

        <form method="get" action="">

            <div class="form">

                <span id="add_photo"><img scr="" class="dog" id='dog'/><i class="fa fa-plus-circle" id="plus"></i>
                    <comment class="sen">Add a photo</comment>
                </span>



                <input type="text" placeholder="Jobs" required="required"><br />

                <input type="text" placeholder="Location" required="required"><br />

                <input type="text" placeholder="Bio" required="required"><br />

                <input type="text" placeholder="Phone Number" required="required"><br />


                <input type="text" placeholder="Date Of Birth" required="required"><br />

                <input type="file" id='photo' style='display:none;' required="required" value=''><br />

                <input type="submit" value="Make Profile" class="btn">

            </div>


        </form>

    </div>



</div>
</div>
</div>

<script src='{{asset("js/make_new_profile.js")}}'></script>
</body>

</html>
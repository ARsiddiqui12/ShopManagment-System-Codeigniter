
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Shop Management System</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="<?php echo base_url('login_assets'); ?>/css/preview.css" rel="stylesheet" />
    <script src="<?php echo base_url('login_assets'); ?>/js/modernizr.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo base_url('images')."/favicon.ico"; ?>" >
</head>
<body class="eternity-form">
    <nav class="main-nav">
        <ul>
            <li><a href="#demo1" class="active" data-title="Login Form" data-panel="first"></a></li>
            <li><a href="#demo2" id="democlick2" data-title="Registration Form" data-panel="second"></a></li>
            <li><a href="#demo3" data-title="Forgot Password Form" data-panel="third"></a></li>
            
        </ul>
    </nav>
   
    <section class="colorBg1 colorBg" id="demo1" data-panel="first">

        <div class=" container">

            <div class="login-form-section">
                <div class="login-content " data-animation="bounceIn">
                    <form method="post" id="logininfo">
                        <div class="section-title">
                            <h3 style="font-weight:bold; text-align:center;"><img src="<?php echo base_url()."images/loginicon.png"; ?>"><br>SHOP MANAGEMENT SYSTEM</h3>
                            <div class="alert alert-danger" id="errormsg"></div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                <input type="text" name="" id="main_username" required="required" class="form-control" placeholder="Username" />

                            </div>
                            <span id="userrequired" style="color:red;font-style:italic;font-weight:bold;"><i class="icon-arrow-up"></i>&nbsp;Username Field is required.</span>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                <input type="password" name="main_password" id="main_password" required="required" class="form-control " placeholder="Password" />
                            </div>
                             <span id="passrequired" style="color:red;font-style:italic;font-weight:bold;"><i class="icon-arrow-up"></i>&nbsp;Password Field is required.</span>
                        </div>
                        <div class="login-form-action clearfix">
                            <div class="checkbox pull-left">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="rememberME" value="1">
                                </div>
                                <span class="checkbox-text pull-left">&nbsp;Remember Me</span>
                            </div>
                            <button type="button" id="loginbtn" class="btn btn-success pull-right green-btn">LogIn &nbsp; <i class="icon-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="login-form-links link1 " data-animation="fadeInLeftBig" data-animation-delay=".2s">
                    <h4 class="blue">Don't have an Account?</h4>
                    <span>No worry</span>
                    <a href="#demo2" class="blue">Click Here</a>
                    <span>to Register</span>
                </div>
                <div class="login-form-links link2 " data-animation="fadeInRightBig" data-animation-delay=".4s">
                    <h4 class="green">Forget your Password?</h4>
                    <span>Dont worry</span>
                    <a href="#demo3" class="green">Click Here</a>
                    <span>to Get New One</span><br><br>
                    <span style="text-align:center;">&copy;Copyright 2015 Shop Management System<br>
                    Developed By <a href="https://www.google.com/+ARehmanSiddiqui"><b>A.Rehman Siddiqui</b></a>
                    </span>
                </div>
            </div>



        </div>
    </section>
    <section class="colorBg form-seprator i1" style="padding:0px;">

        <img src="<?php echo base_url()."images/backfour.jpg"; ?>" style="width:100%;">

    </section>
    <section class="colorBg2 colorBg" id="demo2" data-panel="second">
        <div class=" container">
            <br />
            
            <!-- #region Registration Form -->
            <div class="registration-form-section">
                <form method="post" action="<?php echo site_url('register'); ?>" id="regform" enctype="multipart/form-data">
                    <div class="section-title reg-header " data-animation="fadeInDown">
                        <h3 style="font-weight:bold; text-align:center;"><img src="<?php echo base_url()."images/registericon.png"; ?>"><br>REGISTRATION</h3>
                       
 

                            <?php echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>
                      
                    </div>
                    <div class="clearfix">
                        <div class="col-sm-6 registration-left-section  " data-animation="fadeInUp">
                       
                            <div class="reg-content">
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                        <input type="text" name="txt_fname" value="<?php echo set_value('txt_fname',''); ?>" maxlength="25" class="form-control " placeholder="FirstName" required="required" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                        <input type="text" name="txt_lname" value="<?php echo set_value('txt_lname',''); ?>" maxlength="25" class="form-control " placeholder="LastName" required="required" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                        <input type="email" name="txt_email" value="<?php echo set_value('txt_email',''); ?>" maxlength="45" class="form-control " placeholder="Email Id" required="required" />
                                    </div>
                                </div>

                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-phone icon-color"></i></span>
                                        <input type="number" value="<?php echo set_value('txt_mobile',''); ?>" name="txt_mobile" maxlength="16" class="form-control " placeholder="Mobile Number" required="required" />
                                    </div>
                                </div>

                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-credit-card icon-color"></i></span>
                                        <input type="number" name="txt_nic" value="<?php echo set_value('txt_nic',''); ?>" maxlength="16" class="form-control " placeholder="NIC Number" required="required" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6 registration-right-section " data-animation="fadeInUp">
                            <div class="reg-content">
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-user icon-color"></i></span>
                                        <input type="text" name="txt_username" value="<?php echo set_value('txt_username',''); ?>" class="form-control " placeholder="UserName" required="required" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                        <input type="password" id="password" name="txt_password" class="form-control " placeholder="Password" required="required" />
                                    </div>
                                </div>
                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-key icon-color"></i></span>
                                        <input type="password" id="confirm_password" name="repassword" class="form-control " placeholder="Confirm-Password" required="required" />
                                    </div>
                                </div>

                                <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-retweet icon-color"></i></span>
                                        <input type="text" class="form-control" value="<?php echo set_value('txt_address',''); ?>" name="txt_address" placeholder="Home Address" required="required" />
                                    </div>
                                </div>

                                 <div class="textbox-wrap">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="icon-upload icon-color"></i></span>
                                        <input type="file" id="userimg" class="form-control " name="userfile" placeholder="Image" required="required" />
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="registration-form-action clearfix " data-animation="fadeInUp" data-animation-delay=".15s">
                        <a href="#demo1" class="btn btn-success pull-left blue-btn ">
                            <i class="icon-chevron-left"></i>&nbsp; &nbsp;Back To Login  
                        </a>
                        <button type="submit" class="btn btn-success pull-right green-btn ">Register Now &nbsp; <i class="icon-chevron-right"></i></button>

                    </div>
                </form>
            </div>



        </div>
    </section>
    <section class="colorBg form-seprator i2" style="padding:0px;">
 <img src="<?php echo base_url()."images/backtwo.png"; ?>">


    </section>
    <section class="colorBg3 colorBg" id="demo3" data-panel="third">
        <div class=" container">
            <br />
            <br />
            <br />

            <div class="forgot-password-section" data-animation="bounceInLeft">
                <div class="section-title">
                   <h3 style="font-weight:bold; text-align:center;"><img src="<?php echo base_url()."images/forgeticon.png"; ?>"><br>GET YOUR PASSWORD</h3>

                    <div id="forgeterrormsg"></div>
                </div>
                <div class="forgot-content">
                    <form>
                        
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="icon-envelope icon-color"></i></span>
                                <input type="email" class="form-control" id="forgetemail" placeholder="Email Id" required="required" />
                            </div>
                        <span id="forgetemailrequired" style="color:red;font-style:italic;font-weight:bold;"><i class="icon-arrow-up"></i>&nbsp;Email Field is required.</span>
                        </div>
                        <div class="forget-form-action clearfix">
                            <a class="btn btn-success pull-left blue-btn" href="#demo1"><i class="icon-chevron-left"></i>&nbsp;&nbsp;Back  </a>
                            <button type="button" id="forgetbtn" class="btn btn-success pull-right green-btn">Submit &nbsp;&nbsp; <i class="icon-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>
    <?php


     ?>

    <script src="<?php echo base_url('login_assets'); ?>/js/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url('login_assets'); ?>/js/bootstrap.js"></script>
    <script src="<?php echo base_url('login_assets'); ?>/js/respond.src.js"></script>
    <script src="<?php echo base_url('login_assets'); ?>/js/jquery.icheck.js"></script>
    <script src="<?php echo base_url('login_assets'); ?>/js/placeholders.min.js"></script>
    <script src="<?php echo base_url('login_assets'); ?>/js/waypoints.min.js"></script>
    <script src="<?php echo base_url('login_assets'); ?>/js/jquery.panelSnap.js"></script>
 <script src="<?php echo base_url('login_assets'); ?>/bootstrap-notify.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("input").iCheck({
                checkboxClass: 'icheckbox_square-blue',
                increaseArea: '20%' // optional
            });
            $(".dark input").iCheck({
                checkboxClass: 'icheckbox_polaris',
                increaseArea: '20%' // optional
            });
            $(".form-control").focus(function () {
                $(this).closest(".textbox-wrap").addClass("focused");
            }).blur(function () {
                $(this).closest(".textbox-wrap").removeClass("focused");
            });

            //On Scroll Animations


            if ($(window).width() >= 968 && !Modernizr.touch && Modernizr.cssanimations) {

                $("body").addClass("scroll-animations-activated");
                $('[data-animation-delay]').each(function () {
                    var animationDelay = $(this).data("animation-delay");
                    $(this).css({
                        "-webkit-animation-delay": animationDelay,
                        "-moz-animation-delay": animationDelay,
                        "-o-animation-delay": animationDelay,
                        "-ms-animation-delay": animationDelay,
                        "animation-delay": animationDelay
                    });

                });
                $('[data-animation]').waypoint(function (direction) {
                    if (direction == "down") {
                        $(this).addClass("animated " + $(this).data("animation"));

                    }
                }, {
                    offset: '90%'
                }).waypoint(function (direction) {
                    if (direction == "up") {
                        $(this).removeClass("animated " + $(this).data("animation"));

                    }
                }, {
                    offset: $(window).height() + 1
                });
            }

            //End On Scroll Animations


            $(".main-nav a[href]").click(function () {
                var scrollElm = $(this).attr("href");

                $("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

                $(".main-nav a[href]").removeClass("active");
                $(this).addClass("active");
            });




            if ($(window).width() > 1000 && !Modernizr.touch) {
                var options = {
                    $menu: ".main-nav",
                    menuSelector: 'a',
                    panelSelector: 'section',
                    namespace: '.panelSnap',
                    onSnapStart: function () { },
                    onSnapFinish: function ($target) {
                        $target.find('input:first').focus();
                    },
                    directionThreshold: 50,
                    slideSpeed: 1000
                };
                $('body').panelSnap(options);

            }

            $(".colorBg a[href]").click(function () {
                var scrollElm = $(this).attr("href");

                $("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);

                return false;
            });





var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
           





var imagename = document.getElementById("userimg");

function validationimage()
{
  
      var ext = $('#userimg').val().split('.').pop().toLowerCase();
if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
    imagename.setCustomValidity('Image must be in these standard formats(jpg, jpeg, gif, png)');
}else{
    imagename.setCustomValidity('');
}
    
   
}

imagename.onchange=validationimage;

<?php if($this->uri->segment(2)==6){  ?>

var notify = $.notify('<strong>Congrats</strong> You Have Successfully Registered...', {
    type: 'success',
    allow_dismiss: false,
    showProgressbar: true
});

setTimeout(function() {
    notify.update('message', '<strong>Saving</strong> Profile Image.');
}, 3000);

setTimeout(function() {
    notify.update('message', '<strong>Saving</strong> Profile Details.');
}, 4000);

setTimeout(function() {
    notify.update('message', '<strong>Saving</strong> Login Details.');
}, 5000);


setTimeout(function() {
    notify.update('message', '<strong>All Details Saved</strong>');
    var url ='<?php echo site_url(); ?>';
    $(location).attr('href',url);
}, 8000);

<?php } ?>







<?php if(validation_errors() == true) { 
?>

$( "#democlick2" ).on( "click", function() {
  $("html,body").animate({ scrollTop: $(scrollElm).offset().top }, 500);
});
$( "#democlick2" ).trigger( "click" );
    <?php } ?>




$("#errormsg").hide();
$("#userrequired").hide();
$("#passrequired").hide();

$("#loginbtn").on('click',function(){

var username = $("#main_username").val();
var password = $("#main_password").val();
var remember ;
if(username=="")
{
$("#userrequired").show("slow");
}
else
{
$("#userrequired").hide();

}

if(password=="")
{
$("#passrequired").show("slow");

}else{
$("#passrequired").hide();

if($("#rememberME").is(':checked'))
{
    remember =1;
}else{
    remember =0;
}
$.ajax({
    type:'post',
    url:"<?php echo site_url().'/LoginController/userverification'; ?>",
data:'username='+$("#main_username").val()+'& password='+$("#main_password").val()+'& remember='+remember,
    success:function(msg)
    {
        
       
       

            $("#errormsg").show();
        $("#errormsg").html(msg);
        

        
        
    }


});

}
/*$.ajax({
    type:'post',
    url:"<?php echo site_url().'/LoginController/userverification'; ?>",
data:'username='+$("#main_username").val()+'& password='+$("#main_password").val(),
    success:function(msg)
    {
        $("#errormsg").show();
        $("#errormsg").html(msg);
    }


});
*/

});

























$("#forgetemailrequired").hide();
$("#forgeterrormsg").hide();

$("#forgetbtn").on('click',function(){
var email = $("#forgetemail").val();
if(email=="")
{
$("#forgetemailrequired").show();
}else{
$("#forgetemailrequired").hide();

$.ajax({
    type:'post',
    url:"<?php echo site_url().'/LoginController/forgetpassword'; ?>",
data:'email='+email,
    success:function(msg)
    {
        $("#forgeterrormsg").show();
        $("#forgeterrormsg").html(msg);
    }


});


}

});





























        });
    </script>

</body>

</html>

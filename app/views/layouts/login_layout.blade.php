<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>fusionmate</title>
        <link href="fusionmate/public/plugins/css/bootstrap.min.css" rel="stylesheet">
        <link href="fusionmate/public/plugins/css/animate.min.css" rel="stylesheet"> 
        <link href="fusionmate/public/plugins/css/font-awesome.min.css" rel="stylesheet">
        <link href="fusionmate/public/plugins/css/lightbox.css" rel="stylesheet">
        <link href="fusionmate/public/plugins/css/main.css" rel="stylesheet">
        <link id="css-preset" href="fusionmate/public/plugins/css/presets/preset1.css" rel="stylesheet">
        <link href="fusionmate/public/plugins/css/responsive.css" rel="stylesheet">
        <link href="fusionmate/public/plugins/vendors/bower_components/mediaelement/build/mediaelementplayer.css" rel="stylesheet">

        <script type="text/javascript" src="fusionmate/public/plugins/js/jquery-1.9.1.min.js"></script>
        <script src="fusionmate/public/plugins/vendors/bower_components/mediaelement/build/mediaelement-and-player.js"></script>
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link rel='shortcut icon' type='image/x-icon' href='fusionmate/public/plugins/images/favicon.ico' />
        <script src="{{asset('fusionmate/public/plugins/js/jquery.easydropdown.js') }}"></script>
        <script src="{{asset('fusionmate/public/plugins/js/easyResponsiveTabs.js') }}"></script>

        <link href="{{asset('fusionmate/public/plugins/css/loginstyle.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('fusionmate/public/plugins/css/sticky.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('fusionmate/public/plugins/css/textinputeffect.css') }}" rel="stylesheet" type="text/css" media="all" />
        <script src="{{asset('fusionmate/public/plugins/js/scripts.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
$(document).ready(function () {
    $('video,audio').mediaelementplayer();
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });
});

        </script>	
    </head><!--/head-->

    <body>

        <!--.preloader-->
        <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
        <!--/.preloader-->

        <header id="home">
           <div id="home-slider" class="carousel slide carousel-fade col-sm-12" style='background-image: linear-gradient(
      rgba(0, 0, 0, 0.7), 
      rgba(0, 0, 0, 0.7)
    ), url(fusionmate/public/plugins/images/slider/1.jpg)' data-ride="carousel">
      <div class="carousel-inner col-sm-5 " style=' background-image: none !important' >
        <div class="item active" >
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>fusionmate</span></h1>
            <p class="animated fadeInRightBig">Now track tasks effortlessly and collaborate with your team more effectively</p>
            <p class="tpbutton btn-toolbar" style="text-align:center">
                    <a style="background-color: #2196f3" data-scroll class="btn btn-start  animated fadeInUpBig" href="#loginBar">Login</a>
                    <a onclick="triggerSignup();" data-scroll class="btn btn-start animated fadeInUpBig" href="#loginBar">Sign up</a>
                    </p>
                  
          </div>
        </div>
        <div class="item">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Seamlessly chat with your  <span>team members</span></h1>
            <p class="animated fadeInRightBig">Interact with your team productively</p>
  <p class="tpbutton btn-toolbar" style="text-align:center">
                    <a style="background-color: #2196f3" data-scroll class="btn btn-start  animated fadeInUpBig" href="#loginBar">Login</a>
                    <a onclick="triggerSignup();" data-scroll class="btn btn-start animated fadeInUpBig" href="#loginBar">Sign up</a>
                    </p>
            
          </div>
        </div>
        <div class="item" >
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> Realtime <span>Task Management</span></h1>
            <p class="animated fadeInRightBig">Manage Tasks easily at one place.</p>
 <p class="tpbutton btn-toolbar" style="text-align:center">
                    <a style="background-color: #2196f3" data-scroll class="btn btn-start  animated fadeInUpBig" href="#loginBar">Login</a>
                    <a onclick="triggerSignup();" data-scroll class="btn btn-start animated fadeInUpBig" href="#loginBar">Sign up</a>
                    </p>
          </div>
            
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
      <div class="col-sm-7"><div class="mac wow fadeInUp " data-wow-delay="1s"><img style="margin-top:49px" src='fusionmate/public/plugins/gif/211.gif' /></div></div>
    </div><!--/#home-slider-->
            <div class="main-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <h1><img  src="fusionmate/public/plugins/images/fmlogont.png"  class="img-circle img-size center-block" alt="logo"></h1>
                        </a>                    
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                 
                            <li class="scroll active"><a href="#home">Home</a></li>
                           
                           
                            
                        </ul>
                    </div>
                </div>
            </div><!--/#main-nav-->
        </header><!--/#home-->
        <section id="services" >
            
             <div  class="container">
                <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="row">
                        <div class="text-center col-sm-8 col-sm-offset-2">
                            <h2>Features</h2>
                            <p>Fusion Mate is a web application built on the mission for easy collaboration with your colleagues/team members and make tasks simpler by creating tasks, keeping 
                                a track over it, creating teams, personal and private messaging with team members, file sharing.</p>

                        </div>
                    </div> 
                </div>
                <div id="loginBar" class="text-center our-services">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="service-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="service-info">
                                <h3>Create Team</h3>
                                <p>Organize your Team Members and add any team member to whichever team you want to be by inviting them.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                            <div class="service-icon">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <div class="service-info">
                                <h3>Create Taks</h3>
                                <p>Difficulty in managing the tasks? Uh! Fusion Mate makes it more easy. Create task for each team member and keep tract of it.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                            <div class="service-icon">
                                <i class="fa fa-share"></i>
                            </div>
                            <div class="service-info">
                                <h3>Awesome Share</h3>
                                <p>Not just your messages, but all your files, images, PDFs, documents, and snippets can be dropped right into Fusion Mate and shared with anyone you want. </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms" style="display:none">
                            <div class="service-icon">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <div class="service-info">
                                <h3>Professional Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms" style="display:none">
                            <div class="service-icon">
                                <i class="fa fa-bitbucket"></i>
                            </div>
                            <div class="service-info">
                                <h3>App Development</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms" style="display:none">
                            <div class="service-icon">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="service-info">
                                <h3>Clean Code</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <div  class="container ">
                 <div  class="heading wow bounceInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                     
                    <div class="row">
                        <div style="
    margin-top: -93px;" class="text-center col-sm-8 col-sm-offset-2">
                                 <div  style="
    border: 1px solid #2196F3;" class="head">
                            <div id="error"></div>	
                            <div class="logologin">
                                <!--<img src="fusionmate/public/plugins/images/fmlogo.png" class="img-circle img-size" alt="Cinque Terre">-->
                                <div class="logologin-top" style="padding-top: 10px;">
                                    <img src="fusionmate/public/plugins/images/fmlogont.png" class="img-circle img-size center-block"  alt="logo">
                                    <h1 style='font-family: sans-serif;
                                        font-weight: bold;font-size:20px;     padding-bottom: 41px;'>fusionmate</h1>
                                    <h1 style='font-family: sans-serif;
                                        ;font-size:14px;'>Get started with Awsomeness!</h1><br/>
                                    <h1 style='font-family: sans-serif;
                                        ;font-size:14px;'>Login/Sign up and explore the features of Fusionmate.</h1><br/>

                                </div>
                                <!--                                <div class="logologin-bottom">
                                                                    <section class="sky-form">									
                                
                                                                    </section>
                                                                </div>-->
                            </div>		
                            <div class="login">
                                <div class="sap_tabs">
                                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                        <ul class="resp-tabs-list">
                                            <li  class="resp-tab-item" aria-controls="tab_item-0" onclick="removeCss()" role="tab"><span>Login</span></li>
                                            <li id="signup" class="resp-tab-item" aria-controls="tab_item-1" onclick="addCss()" role="tab"><label>/</label><span>Sign up</span></li>
                                            <div class="clearfix"></div>
                                        </ul>			  	 
                                        <div class="resp-tabs-container">
                                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                                <div class="login-top">
                                                    <form autocomplete="off" id="loginForm" action="/login" method="post">
                                                        <div class="styled-input">
                                                            <input autocomplete="off" class="name" name="email" type="text" required />
                                                            <label>Email</label>
                                                            <span></span> </div>
                                                        <div class="styled-input">

                                                            <input  autocomplete="off" class="password"  name="password" type="password" required />
                                                            <label>Password</label>
                                                            <span></span> </div>
                                                        </label>	
                                                    </form>


                                                    <div class="login-bottom login-bottom1">
                                                        <div class="submit">
                                                            <input id="login" type="submit" style="margin-top:72px;"  onclick="login();
                                                                    return false;" value="LOGIN"/>
                                                        </div>

                                                        <ul style>

                                                            <li id='forgot'><a href="/reset" >Forgot password?</span></a></li>

                                                        </ul>
                                                        <div class="clear"></div>
                                                    </div>	
                                                </div>
                                            </div>
                                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                                <span id="alert-message"></span>
                                                <div class="login-top" >
                                                    <form id='registerForm'  method='post'>

                                                        <input name="role" hidden type="text" value="1" required />                                                                                                                           
                                                        <div class="styled-input ">
                                                            <input class="name " name="firstName" type="text" required />
                                                            <label>First Name</label>
                                                            <span></span> </div>

                                                        <div class="styled-input ">
                                                            <input class="name " name="lastName" type="text" required />
                                                            <label>Last Name</label>
                                                            <span></span> </div>

                                                        <div class="styled-input">
                                                            <input class="email"  name="email" type="text" required />
                                                            <label>Email</label>
                                                            <span></span> </div>		
                                                        <div class="styled-input">
                                                            <input class="password"  name="password" type="password" required />
                                                            <label>Password</label>
                                                            <span></span> </div>		
                                                        <!--                                                                    <div class="styled-input">
                                                          <input class="password"  name="password" type="password" required />
                                                          <label>Password</label>
                                                          <span></span> </div>		-->



                                                    </form>
                                                    <div class="login-bottom" ">
                                                        <div class="submit">
                                                            <input id="register" onclick="register();
                                                                    return false;" style='font-size:14px !important;' type="submit" value="SIGN UP"/>
                                                        </div>
                                                        <!--									<ul>
                                                                                                                                        <li><p>Or login with</p></li>
                                                                                                                                        <li><a href="#"><span class="fb"></span></a></li>
                                                                                                                                        <li><a href="#"><span class="twit"></span></a></li>
                                                                                                                                        <li><a href="#"><span class="google"></span></a></li>
                                                                                                                                </ul>-->
                                                        <div class="clear"></div>
                                                    </div>	
                                                </div>

                                            </div>							
                                        </div>	
                                    </div>
                                </div>	
                            </div>	
                            <div class="clear"></div>
                        </div>	

                        </div>
                    </div> 
                </div>
            </div>
           
        </section><!--/#services-->
       
    <footer id="footer">
        <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="container text-center">
                <div class="footer-logo">
<!--                        <a href="index.html"><img  class="img-responsive img-size" src="fusionmate/public/plugins/images/fmlogont.png" style='background-color: #fff;
' alt="logo" alt=""><p style="color:#fff !important;">Fusion Mate</p></a>-->
                </div>
                <div class="social-icons" style="display:none;">
                    <ul>
                        <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy; 2016</p>
                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        removeCss();
        var base_url = '<?php echo Config::get('constants.constants_list.BASE_URL'); ?>'
        function register()
        {

            $.ajax({
                url: "/register",
                type: "GET",
                dataType: "JSON",
                data: $("#registerForm").serialize()
            }).done(function (data) {
                if (data.success == "notok") {
                    var erreurs = '<div class="alert alert-danger alert-dismissible" role="alert">';
                    erreurs += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    erreurs += ' <h5 style="color:#fff" class="text-center">'
                    erreurs += 'Something Went Wrong!Try to login.<br/> ';
                    erreurs += '</h5></div>';
                    $('#error').html(erreurs);

                }
                if (data.success == false) {
                    var erreurs = '<div class="alert alert-danger alert-dismissible" role="alert">';
                    erreurs += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    erreurs += ' <h5 style="color:#fff" class="text-center">'
                    $(data.errors).each(function (i, error) {
                        if (error.firstName != undefined)
                            erreurs += error.firstName + '<br/> ';
                        if (error.lastName != undefined)
                            erreurs += error.lastName + '<br/> ';
                        if (error.email != undefined)
                            erreurs += error.email + '<br/> ';
                        if (error.password != undefined)
                            erreurs += error.password;
                    });
                    erreurs += '</h5></div>';
                    $('#error').html(erreurs);
                }
                if (data.success == "ok") {
                    $("#register").attr("disabled", "true");
                    $("#register").val("Processing...");
                    window.location.assign(base_url + "home");
                }
//                    
            });
        }

        function login()
        {
            $("#login").attr("disabled", "true");
            $("#login").val("logging in...");
            $.ajax({
                url: "/login",
                type: "POST",
                dataType: "JSON",
                data: $("#loginForm").serialize()
            }).done(function (data) {
                if (data.success == true) {

                    window.location.assign(base_url + "home");
                } else {
                    $("#login").removeAttr("disabled");
                    $("#login").val("LOGIN");
                    var erreurs = '<div class="alert alert-danger alert-dismissible" role="alert">';
                    erreurs += '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                    erreurs += ' <h5 style="color:#fff" class="text-center">'
                    $(data.errors).each(function (i, error) {

                        if (error.email != undefined)
                            erreurs += error.email + '<br/> ';
                        if (error.password != undefined)
                            erreurs += error.password + '<br/> ';
                        if (error.errormsg != undefined)
                            erreurs += error.errormsg;

                    });
                    erreurs += '</h5></div>';
                    $('#error').html(erreurs);
                }
            });
        }
        function triggerSignup() {
            $("#signup").trigger('click');
          
        }
        function addCss() {
            $('.logologin').css("min-height", "400px")
        }

        function removeCss() {
            $('.logologin').css("min-height", "387px")
        }
        function silentErrorHandler() {
            return true;
        }
        window.onerror = silentErrorHandler;
    </script>
    <script type="text/javascript" src="fusionmate/public/plugins/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="fusionmate/public/plugins/js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="fusionmate/public/plugins/js/wow.min.js"></script>
    <script type="text/javascript" src="fusionmate/public/plugins/js/mousescroll.js"></script>
    <script type="text/javascript" src="fusionmate/public/plugins/js/smoothscroll.js"></script>
    <script type="text/javascript" src="fusionmate/public/plugins/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="fusionmate/public/plugins/js/lightbox.min.js"></script>
    <script type="text/javascript" src="fusionmate/public/plugins/js/main.js"></script>

    <style>
        body {
            background: #fff !important; 
            /*font-family: 'SourceSansPro-Regular';*/
            /*font-size: 15px !important;*/
        }
        .alert-danger {
            background-color: rgba(244, 67, 54, 0.7) !important;
            border-color: transparent;
            color: #ffffff;

        }
        button.close {
            background: transparent none repeat scroll 0 0  !important;
            border: 0 none;
            cursor: pointer;
            padding: 0;
            color: #ffffff !important;
        }
        section {
            padding: 90px !important;
        }

        .img-size{
            height:50px !important;

            margin-left: 20px;
        }
        .logoText{
            margin-top: -34px;
            margin-left: 89px;
            color:#ffffff !important;
        }
        .center-block{
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 75px !important;
            margin-top: -17px;
        }
        .carousel-inner{
              position: relative;
/*    width: 50% !important;*/
    overflow: hidden;
        }
    </style>
</body>
</html>
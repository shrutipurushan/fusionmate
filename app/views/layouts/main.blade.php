
<!DOCTYPE html>
<html>
    <head>

        <title>Pakhi an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
        <link href="{{asset(base_url+'fusionmate/public/plugins/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript fusionmate/public/plugins) -->
        <script src="{{asset(base_url+'fusionmate/public/plugins/js/jquery.min.js') }}"></script>
        <!-- Custom Theme files -->
        <link href="{{asset(base_url+'fusionmate/public/plugins/css/homestyle.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Pakhi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- dropdown -->
        <script src="{{asset(base_url+'fusionmate/public/plugins/js/jquery.easydropdown.js') }}"></script>
        <script src="{{asset(base_url+'fusionmate/public/plugins/js/easyResponsiveTabs.js') }}"></script>
        <link href="{{asset(base_url+'fusionmate/public/plugins/js/css/nav.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{asset(base_url+'fusionmate/public/plugins/css/loginstyle.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset(base_url+'fusionmate/public/plugins/css/sticky.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset(base_url+'fusionmate/public/plugins/css/textinputeffect.css') }}" rel="stylesheet" type="text/css" media="all" />
        <script src="{{asset(base_url+'fusionmate/public/plugins/js/scripts.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });
});

        </script>	
    </head>
    <body>
        <!-- header-section-starts -->
        <div class="header" id="home">
            <div class="top-header">
                <div class="container">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset(base_url+'fusionmate/public/plugins/images/logo.png') }}" alt="" /></a>
                    </div>
                    <div class="header-top-right">
                        <!-- start search-->
                        <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>


                        <a href="cart.html"><i class="cart"></i></a>
                    </div>

                </div>
            </div>
            <div class="col-md-12" style='-webkit-font-smoothing: antialiased !important; '>

                <div class="head">

                    <div class="logologin">
                        <div class="logologin-top">
                            <h1 style='font-size:14px;'>Get started with Awsomeness!</h1><br/>
                            <h1 style='font-size:14px;'>Login/Sign up and explore the features of Fusion mate absolutely for free.</h1><br/>

                        </div>
                        <div class="logologin-bottom">
                            <section class="sky-form">									

                            </section>
                        </div>
                    </div>		
                    <div class="login">
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul class="resp-tabs-list">
                                    <li class="resp-tab-item" aria-controls="tab_item-0" onclick="removeCss()" role="tab"><span>Login</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1" onclick="addCss()" role="tab"><label>/</label><span>Sign up</span></li>
                                    <div class="clearfix"></div>
                                </ul>				  	 
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="login-top">
                                            <form id="loginForm" action="/login" method="post">
                                                <div class="styled-input">
                                                    <input class="name" name="email" type="text" required />
                                                    <label>Email</label>
                                                    <span></span> </div>
                                                <div class="styled-input">
                                                    <input class="password"  name="password" type="password" required />
                                                    <label>Password</label>
                                                    <span></span> </div>

                                                </label>	
                                            </form>
                                            <div class="login-bottom login-bottom1">
                                                <div class="submit">
                                                    <input type="submit" style="margin-top:72px;"  onclick="login();
                                                            return false;" value="LOGIN"/>
                                                </div>

                                                <ul style>

                                                    <li><a href="#" style="color: #aaa;">Forgot password?</span></a></li>

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
                                                    <input onclick="register();
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
                <div class="account">
                    <ul>

                        <li class="text-center col-sm-offset-5"><p >Don't have an <a href="#">account?</a></p></li>
                        <div class="clear"></div>
                    </ul>
                </div>

            </div>	
        </div>
    </div>

    <div class="footer">
        
        <div class="container">
            <div class="copyrights">
                <p><a>Design By Fusion Mate</a></p>
            </div>
            <div class="footer-social-icons">
                <a href="#"><i class="fb"></i></a>
                <a href="#"><i class="tw"></i></a>
                <a href="#"><i class="in"></i></a>
                <a href="#"><i class="pt"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
   
    <script type="text/javascript">
        removeCss();
        var base_url = '<?php echo Config::get('constants.constants_list.BASE_URL'); ?>'
        function register()
        {

            $.ajax({
                url: "register/",
                type: "POST",
                dataType: "TEXT",
                data: $("#registerForm").serialize()
            }).done(function (data) {
                $('html, body').animate({
                    scrollTop: $("#alert-message").offset().top
                }, 2000);
                $("#alert-message").append(data);
            });
        }

        function login()
        {
            $.ajax({
                url: "/login",
                type: "POST",
                dataType: "JSON",
                data: $("#loginForm").serialize()
            }).done(function (data) {
                if (data.success == true)
                    window.location.assign(base_url + "home");
            });
        }

        function addCss() {
            $('.logologin').css("min-height", "400px")
        }

        function removeCss() {
            $('.logologin').css("min-height", "387px")
        }
 
    </script>
</body>
</html>
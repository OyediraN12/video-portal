<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('page-title') | festpreiswebsite</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-circle-video.css') }}" rel="stylesheet">

  <!-- font-family: 'Hind', sans-serif; -->
  <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Hind+Guntur:300,400,500,700' rel='stylesheet' type='text/css'>

</head>

<body class="light">
<!-- logo, menu, search, avatar -->
<div class="container-fluid">
    <div class="row">
        <div class="btn-color-toggle">
            <img src="images/icon_bulb_light.png" alt="">
        </div>
        <div class="navbar-container single">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 visible-xs">
                        <a href="#" class="btn-menu-toggle"><i class="cv cvicon-cv-menu"></i></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-6">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="images/logo.svg" alt="Project name" class="logo" />
                            <span>Circle</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-10 hidden-xs">
                        <ul class="list-inline menu">
                            <li class="color-active">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="index-2.html">Home Page</a></li>
                                    <li><a href="single-video.html">Single Video Page</a></li>
                                    <li><a href="single-video-youtube.html">Single Video Youtube Embedded Page</a></li>
                                    <li><a href="single-video-vimeo.html">Single Video Vimeo Embedded Page</a></li>
                                    <li><a href="upload.html">Upload Video Page</a></li>
                                    <li><a href="upload-edit.html">Upload Video Edit Page</a></li>
                                    <li><a href="search.html">Searched Videos Page</a></li>
                                    <li><a href="channel.html">Single Channel Page</a></li>
                                    <li><a href="channels.html">Channels Page</a></li>
                                    <li><a href="single-video-tabs.html">Single Videos Page With Tabs</a></li>
                                    <li><a href="single-video-playlist.html">Single Videos Page With Playlist</a></li>
                                    <li><a href="history.html">History Page</a></li>
                                    <li><a href="categories.html">Browse Categories Page</a></li>
                                    <li><a href="categories_side_menu.html">Browse Categories Side Menu Page</a></li>
                                    <li><a href="subscription.html">Subscription Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="signup.html">Signup Page</a></li>
                                </ul>
                            </li>
                            <li><a href="categories.html">Categories</a></li>
                            <li><a href="channel.html">Channels</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-xs-3">
                        <form action="http://azyrusthemes.com/circlevideo/search.html" method="post">
                            <div class="topsearch">
                                <i class="cv cvicon-cv-cancel topsearch-close"></i>
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>/
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-sm-12 hidden-xs">
                        <div class="loginsignup pull-right">
                            <a href="login.html">Login</a> . <a href="signup.html">Signup</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<div class="mobile-menu">
    <div class="mobile-menu-head">
        <a href="#" class="mobile-menu-close"></a>
        <a class="navbar-brand" href="index-2.html">
            <img src="images/logo.svg" alt="Project name" class="logo" />
            <span>Circle</span>
        </a>
        <div class="mobile-menu-btn-color">
            <img src="images/icon_bulb_light.png" alt="">
        </div>
    </div>
    <div class="mobile-menu-content">
        <div class="mobile-menu-user">
            <div class="mobile-menu-user-img">
                <img src="images/ava11.png" alt="">
            </div>
            <p>Bailey Fry </p>
            <span class="caret"></span>
        </div>
        <a href="#" class="btn mobile-menu-upload">
            <i class="cv cvicon-cv-upload-video"></i>
            <span>Upload Video</span>
        </a>
        <div class="mobile-menu-list">
            <ul>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-play-circle"></i>
                        <p>Popular Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-playlist"></i>
                        <p>Browse Categories</p>
                        <span class="caret"></span>
                    </a>
                    <ul class="mobile-menu-categories">
                        <li class="color-active">
                            <a href="#">Pages <span class="caret"></span></a>
                            <ul>
                                <li><a href="index-2.html">Home Page</a></li>
                                <li><a href="single-video.html">Single Video Page</a></li>
                                <li><a href="single-video-youtube.html">Single Video Youtube Embedded Page</a></li>
                                <li><a href="single-video-vimeo.html">Single Video Vimeo Embedded Page</a></li>
                                <li><a href="upload.html">Upload Video Page</a></li>
                                <li><a href="upload-edit.html">Upload Video Edit Page</a></li>
                                <li><a href="search.html">Searched Videos Page</a></li>
                                <li><a href="channel.html">Single Channel Page</a></li>
                                <li><a href="channels.html">Channels Page</a></li>
                                <li><a href="single-video-tabs.html">Single Videos Page With Tabs</a></li>
                                <li><a href="single-video-playlist.html">Single Videos Page With Playlist</a></li>
                                <li><a href="history.html">History Page</a></li>
                                <li><a href="categories.html">Browse Categories Page</a></li>
                                <li><a href="categories_side_menu.html">Browse Categories Side Menu Page</a></li>
                                <li><a href="subscription.html">Subscription Page</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="signup.html">Signup Page</a></li>
                            </ul>
                        </li>
                        <li><a href="categories.html">Categories</a></li>
                        <li><a href="channel.html">Channels</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-liked"></i>
                        <p>Liked Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-history"></i>
                        <p>History</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-purchased"></i>
                        <p>Purchased Videos</p>
                    </a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn mobile-menu-logout">Log out</a>
    </div>
</div>

<div class="container-fluid bg-image">
    <div class="row">
        <div class="login-wraper">
            <div class="hidden-xs">
                <img src="images/login.jpg" alt="">
            </div>
            <div class="banner-text hidden-xs">
                <div class="line"></div>
                <div class="b-text">
                    Watch <span class="color-active">millions<br> of</span> <span class="color-b1">v</span><span class="color-b2">i</span><span class="color-b3">de</span><span class="color-active">os</span> for free.
                </div>
                <div class="overtext">
                    Over 6000 videos uploaded Daily.
                </div>
            </div>
            <div class="login-window">
                <div class="l-head">
                    Sign Up for Free
                </div>
                <div class="l-form">
                    <form action="http://azyrusthemes.com/circlevideo/signup.html">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="sample@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Re-type Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="**********">
                        </div>
                        <div class="row">
                            <div class="col-lg-7"><button type="submit" class="btn btn-cv1">Sign Up</button></div>
                            <div class="hidden-xs">
                                <div class="col-lg-1 ortext">or</div>
                                <div class="col-lg-4 signuptext"><a href="login.html">Log In</a></div>
                            </div>
                        </div>
                        <div class="row hidden-xs">
                            <div class="col-lg-12 forgottext">
                                <a href="#">By clicking "Sign Up" I agree to circle's Terms of Service.</a>
                            </div>
                        </div>
                        <div class="visible-xs text-center mt-30">
                            <span class="forgottext"><a href="#">Already have an account?</a></span>
                            <span class="signuptext"><a href="#">Login here</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <!--<a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="Project name" class="logo" /></a>-->
                    <a class="navbar-brand" href="index-2.html">
                        <img src="images/logo.svg" alt="Project name" class="logo" />
                        <span>Circle</span>
                    </a>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-links">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li class="hidden-xs"><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="delimiter"></div>
                </div>
                <div class="col-lg-7 col-sm-6 col-xs-12">
                    <div class="f-copy">
                        <ul class="list-inline">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li>Copyrights 2016 <a href="azyrusthemes.html" class="hidden-xs">azyrusthemes.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-4 col-xs-12">
                    <div class="f-last-line">
                        <div class="f-icon pull-left">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="f-lang pull-right">
                            <!-- Small button group -->
                            <div class="btn-group dropup pull-right">
                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                    <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="delimiter visible-xs"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
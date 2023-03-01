
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@yield('title') | Atrium Recruitment Agency - Find Jobs, Get Work, Job Seekr Portal in the USA</title>
<!-- Bootstrap -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS-->
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="assets/animate/animate.css" rel="stylesheet">
<!-- Owl Carousel -->
<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<!-- magnific Css -->
<link href="assets/css/magnific-popup.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css?ver={{rand(1021,11111111)}}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
  <div class="logo-wrapper"> 
    <!-- Logo -->
    <div class="container">
      <div class="row"> 
        <!-- Logo -->
        <div class="col-sm-12 col-md-3 hidden-xs"> <a href="{{url('/')}}" class="logo-link">Atrium Recruitment</a> </div>
        <!-- Navigation -->
        <div class="col-sm-12 col-md-9">
          <nav class="navbar navbar-default pull-right"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="{{url('/')}}" class="logo-link">Atrium Recruitment</a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Current Jobs </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Current Jobs</a></li>
                    <li><a href="#">Apply Job</a></li>
                  </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="user"><img src="images/user-icon.png" alt=""></div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header End --> 

@yield('content')

<!-- Footer styles Start -->
<footer>
  <div class="container">
    <div class="row">
      <div class="footer-section">
        <div class="col-sm-4">
          <div class="single-secton">
            <h3>Subscribe Our Newsletter</h3>
            <div class="form">
              <div class="form-group">
                <input placeholder="Enter your Email" id="exampleInputName1" class="form-control first" type="text">
              </div>
              <input class="bttn" value="Subscribe" type="text">
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="single-secton">
            <h3>Follow us on</h3>
            <ul>
              <li class="facebook"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
              <li class="twitter"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
              <li class="linkedin"><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
              <li class="google"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
              <li class="youtube"><a href="javascript:void(0)"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="single-secton">
            <h3>Need Help ?</h3>
            <p><i class="fa fa-phone"></i> CALL US : <span>1800-0000-1234</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="single-section-two"> 
         <h3 class="footer-title">Atrium Recruitment</h3>
          <p>Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>
        </div>
      </div>
      <div class="col-sm-3 col-md-2">
        <div class="single-section-two white">
          <h3>Info</h3>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-3 col-md-2">
        <div class="single-section-two white">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Add Listing</a></li>
            <li><a href="#">Popular Categories</a></li>
            <li><a href="#">Popular Places</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="single-section-two">
          <h3>Get In Touch</h3>
          <div class="form">
            <div class="form-group">
              <input placeholder="Enter your Name" id="exampleInputName2" class="form-control first" type="text">
            </div>
            <div class="form-group">
              <input placeholder="Enter your Email" id="exampleInputEmail" class="form-control first" type="text">
            </div>
            <div class="form-group">
              <input placeholder="Enter your Message" id="exampleInputMessage" class="form-control first message" type="text">
              <input class="bttn" value="Subscribe" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer styles End --> 
<!-- Copyright styles End -->
<div class="copyright-wrapper">
  <div class="container">
    <p>&copy; Copyright 
      <script type="text/javascript">
	var d=new Date();
	document.write(d.getFullYear());
	</script> 
     Atrium Recruitment | All Rights Reserved.</p>
  </div>
</div>
<!-- Copyright styles End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="assets/jquery/jquery-3.1.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/jquery/plugins.js"></script> 
<script src="assets/jquery/jquery.animateNumber.min.js"></script> 
<script src="assets/jquery/jquery.magnific-popup.min.js"></script> 
<script src="assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="assets/wow/wow.min.js"></script> 
<script src="js/custom.js"></script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-83282272-3');
</script>
</body>
</html>
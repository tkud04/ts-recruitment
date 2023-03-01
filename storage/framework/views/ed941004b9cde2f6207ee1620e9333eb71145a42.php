<?php $__env->startSection('title',"Welcome"); ?>

<?php $__env->startSection('content'); ?>
<!-- Banner Wrapper Start -->
<div class="banner-wrapper">
  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel"> 
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"><img src="images/banner1.jpg" alt="Recruite Pro"/></div>
        <div class="hero">
          <h1>We offer <span>1,259</span> job vacancies right now!</h1>
          <p>Find a high paying job in a minute</p>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"><img src="images/banner2.jpg" alt="Recruite Pro"/></div>
        <div class="hero">
          <h1>Fill out our application form and start <span>immediately</span></h1>
          <p>Employers are actively looking to fill spots today</p>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"><img src="images/banner3.jpg" alt="Recruite Pro"/></div>
        <div class="hero">
          <h1>We offer <span>1,259</span> job vacancies right now!</h1>
          <p>Find your desire one in a minute</p>
        </div>
      </div>
    </div>
    <div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
  </div>
</div>
<!-- Banner Wrapper End --> 
<!-- Professional Search Start -->
<div class="professional-search">
  <div class="container">
    <div class="search-bg">
      <h2>Search For Professionals</h2>
      <div class="form">
        <div class="form-group">
          <input class="form-control" id="professionals" placeholder="All Professionals" type="text">
        </div>
        <div class="form-group">
          <input class="form-control" id="anylocation" placeholder="United States" type="text" disabled>
        </div>
        <div class="form-group">
          <select id="selectLocation" class="form-control">
            <option>All services</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- Professional Search End --> 
<!-- Callout Wrapper Start -->
<div class="callouts-wrapper">
  <div class="container">
    <div class="title">
      <h2>We Can Help You <span>Get A Job</span></h2>
      <h3>If the job is online, you will find it on RecruitePro</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon1.png" alt=""></span>
          <h3>Accounting / Finance</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon2.png" alt=""></span>
          <h3>Automotive Jobs</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon3.png" alt=""></span>
          <h3>Construction / Facilities</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon4.png" alt=""></span>
          <h3>Education Training</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon5.png" alt=""></span>
          <h3>Healthcare</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon6.png" alt=""></span>
          <h3>Restaurant / Food Service</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon7.png" alt=""></span>
          <h3>Transportation / Logistics</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="callouts"> <span class="icon"><img src="images/icon8.png" alt=""></span>
          <h3>Telecommunications</h3>
        </div>
      </div>
    </div>
    <a href="#" class="btn-one">Browse All Categories</a> </div>
</div>
<!-- Callout Wrapper End --> 
<!-- Our counters -->
<div class="counters">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="counter">
          <div class="counter-icon-box"><img src="images/counter-icon1.png" alt=""></div>
          <div class="counter-right">
            <div class="number animateNumber" data-num="3000"> <span>3000</span></div>
            <p>Registered Members</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="counter">
          <div class="counter-icon-box"><img src="images/counter-icon2.png" alt=""></div>
          <div class="counter-right">
            <div class="number animateNumber" data-num="14000"> <span>14000</span></div>
            <p>Total Jobs Posted</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="counter last">
          <div class="counter-icon-box"><img src="images/counter-icon3.png" alt=""></div>
          <div class="counter-right">
            <div class="number animateNumber" data-num="4127"> <span>4127</span></div>
            <p>Testimonials</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Our counters End --> 
<!-- Latest jobs Wrapper Start -->
<div class="latest-jobs-wrapper">
  <div class="container">
    <div class="title">
      <h2>Latest <span>Jobs</span></h2>
      <h3>Here you can see</h3>
    </div>
  </div>
  <div class="container">
    <?php
     for($i = 0; $i < count($jobs); $i++){
      $class = $i === count($jobs) - 1 ? " last" : "";
      $job = $jobs[$i];
    ?>
    <div class="single-jobs<?php echo e($class); ?>"> <i class="fa fa-<?php echo e($job['icon']); ?>"></i>
      <div class="job-heading">
        <h3><?php echo e($job['title']); ?></h3>
        <p><?php echo e($job['description']); ?></p>
      </div>
      <div class="our-location color<?php echo e($i + 1); ?>"> <span class="fa fa-map-marker" aria-hidden="true"></span>
        <div class="location-content">
          <h3><?php echo e($job['location']); ?></h3>
          <span><?php echo e($job['availability']); ?></span> </div>
      </div>
    </div>
  
  <?php
     }
  ?>
  </div>
</div>
<!-- Latest jobs Wrapper End --> 
<!-- Video Wrapper Start -->
<div class="video-wrapper">
  <div class="container">
    <div class="title">
      <h2>Watch Our Video</h2>
      <h3>Here you can see</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0">
        <p> Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. <span> Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, </span> pellentesque dui non, semper orci.</p>
        <a href="https://www.youtube.com/watch?v=MWjk8asP2e8" class="btn btn-default" data-popup="video"><i class="fa fa-play"></i></a> </div>
    </div>
  </div>
</div>
<!-- Video Wrapper End --> 
<!-- Popular Search Wrapper Start -->
<div class="popular-search-wrapper">
  <div class="container">
    <div class="title">
      <h2>Popular <span>Searches</span></h2>
      <h3>Here you can see</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12">
        <div class="browse-category">
          <h3>BROWSE BY CATEGORIES</h3>
          <ul>
            <li>Marketing (174)</li>
            <li>Engineering (174)</li>
          </ul>
          <ul>
            <li>Teaching & Education (174)</li>
            <li>Software & Web (174)</li>
          </ul>
          <ul>
            <li>Writing (174)</li>
            <li>Sales & BD (174)</li>
          </ul>
          <ul>
            <li>Telemarketing (174)</li>
            <li>Customer Service (174)</li>
          </ul>
          <ul>
            <li>Administration (174)</li>
            <li>Creative Design (174)</li>
          </ul>
          <ul>
            <li>Creative Design (174)</li>
            <li>Accounts & Finance (174)</li>
          </ul>
          <ul class="last">
            <li>SEO (174)</li>
            <li>Web Design (174)</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-2 hidden-xs hidden-sm">
        <div class="popular-search-img"><img src="images/popular-search-img.png" alt=""></div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="browse-city">
          <h3>BROWSE BY CITIES</h3>
          <ul>
            <li>New York</li>
            <li>Bessemer</li>
            <li>Dothan</li>
          </ul>
          <ul>
            <li>Alexander City</li>
            <li>Birmingham</li>
            <li>Enterprise</li>
          </ul>
          <ul>
            <li>Enterprise</li>
            <li>Chickasaw</li>
            <li>Eufaula</li>
          </ul>
          <ul>
            <li>Anniston</li>
            <li>Clanton</li>
            <li>Anchorage</li>
          </ul>
          <ul>
            <li>Athens</li>
            <li>Cullman</li>
            <li>Cordova</li>
          </ul>
          <ul>
            <li>Atmore</li>
            <li>Decatur</li>
            <li>Fairbanks</li>
          </ul>
          <ul class="last">
            <li>Auburn</li>
            <li>Demopolis</li>
            <li>Haines</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center"> <a href="#" class="btn-one">Browse All Categories</a></div>
  </div>
</div>
<!-- Popular Search Wrapper End --> 
<!-- Testimonials Wrapper Start -->
<div class="testimonials-wrapper">
  <div class="container">
    <div class="title">
      <h2>Success <span>Stories</span></h2>
      <h3>from happy clients</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
        <!-- Testimonials Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Testimonials slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
              <div class="testimonials-main">
                <div class="testimonials-inner"> <i class="fa fa-quote-left"></i>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <div class="testimonials-img-main"> </div>
                </div>
                <span class="triangle-down"></span>
                <div class="testimonial-img"> <img src="images/testimonials1.png" alt=""> </div>
                <div class="testimonials-text">
                  <p class="client-name">Client Name</p>
                  <p>Designation</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
              <div class="testimonials-main">
                <div class="testimonials-inner"> <i class="fa fa-quote-left"></i>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <div class="testimonials-img-main"> </div>
                </div>
                <span class="triangle-down"></span>
                <div class="testimonial-img"> <img src="images/testimonials2.png" alt=""> </div>
                <div class="testimonials-text">
                  <p class="client-name">Client Name</p>
                  <p>Designation</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
              <div class="testimonials-main">
                <div class="testimonials-inner"> <i class="fa fa-quote-left"></i>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <div class="testimonials-img-main"> </div>
                </div>
                <span class="triangle-down"></span>
                <div class="testimonial-img"> <img src="images/testimonials3.png" alt=""> </div>
                <div class="testimonials-text">
                  <p class="client-name">Client Name</p>
                  <p>Designation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Wrapper End --> 
<!-- App Wrapper Start -->
<div class="app-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
        <div class="row">
          <div class="col-sm-5">
            <div class="app-img"> <img src="images/app-img.png" alt=""> </div>
          </div>
          <div class="col-sm-7">
            <div class="app-text">
              <h2>The <span>Atrium App</span></h2>
              <h3>A world of oppertunity in your hand</h3>
              <p>Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrict	es eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros. Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrices eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros.</p>
              <div class="app-buttons"><a href="#" class="btn-one space"><i class="fa fa-apple" aria-hidden="true"></i>Download</a> <a href="#" class="btn-one"><i class="fa fa-android" aria-hidden="true"></i>Download</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- App Wrapper End --> 
<!-- Subscribe Wrapper Start -->
<div class="subscribe-wrapper">
  <div class="container">
    <div class="title">
      <h2>Subscribe</h2>
      <h3>Get weekly top new jobs delivered to your inbox</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 subscirbe">
        <div class="form">
          <div class="form-group">
            <input placeholder="Enter your Email" id="exampleInputName" class="form-control first" type="text">
          </div>
          <input class="bttn" value="Subscribe" type="text">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Subscribe Wrapper End --> 
<!-- blog Wrapper Start -->
<div class="blog-wrapper">
  <div class="container">
    <div class="title">
      <h2>Latest <span>Blog</span></h2>
      <h3>Here you can see</h3>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="blog-box">
          <div class="blog-img"> <img src="images/blog-img1.jpg" alt=""> </div>
          <div class="blog-caption">
            <h3><a href="javascript:void(0)">Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget odio condimentum, suscipit elit non,sodales mauris.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="blog-box">
          <div class="blog-img"> <img src="images/blog-img2.jpg" alt=""> </div>
          <div class="blog-caption">
            <h3><a href="javascript:void(0)">Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget odio condimentum, suscipit elit non,sodales mauris.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="blog-box">
          <div class="blog-img"> <img src="images/blog-img3.jpg" alt=""> </div>
          <div class="blog-caption">
            <h3><a href="javascript:void(0)">Tonsectetur adipiscing elit. Viva mus id interdum nibh, eu</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget odio condimentum, suscipit elit non,sodales mauris.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center"> <a href="#" class="btn-one">Visit Our Blog</a></div>
  </div>
</div>
<!-- blog Wrapper End --> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/ts-recruitment/resources/views/index.blade.php ENDPATH**/ ?>
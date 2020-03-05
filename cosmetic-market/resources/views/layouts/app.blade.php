<!DOCTYPE html>
<html lang="en">
<head>
<title>MoonStore</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="image/favicon.png" rel="icon" type="image/png" >
<link href="{{asset('client/assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
<link href="{{asset('client/assets/javascript/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('client/assets/https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet"/>
<link href="{{asset('client/assets/css/stylesheet.css')}}" rel="stylesheet">
<link href="{{asset('client/assets/css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('client/assets/javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{asset('client/assets/javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
<script type="text/javascript" src="{{asset('client/assets/javascript/jquery-2.1.1.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('client/assets/javascript/bootstrap/js/bootstrap.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('client/assets/javascript/template_js/jstree.min.js')}}"></script>
<script type="text/javascript" src="{{asset('client/assets/javascript/template_js/template.js')}}" ></script>
<script type="text/javascript" src="{{asset('client/assets/javascript/common.js')}}" ></script>
<script type="text/javascript" src="{{asset('client/assets/javascript/global.js')}}" ></script>
<script type="text/javascript" src="{{asset('client/assets/javascript/owl-carousel/owl.carousel.min.js')}}" ></script>
</head>
<body class="index">
<!-- <div class="preloader loader" style="display: block;"> <img src="{{asset('client/assets/image/loader.gif')}}"  alt="#"/></div> -->
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
            <div class="wel-come-msg"> Welcome to our online store! </div>
            <div class="language">
              <form action="#" method="post" enctype="multipart/form-data" id="language">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> English <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Arabic</a></li>
                    <li><a href="#"> English</a></li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="currency">
              <form action="#" method="post" enctype="multipart/form-data" id="currency">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>USD</strong> <span class="caret"></span> </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Euro</a></li>
                    <li><a href="#">Pound</a></li>
                    <li><a href="#">USD</a></li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="register.html">Register</a></li>
                    <li><a href="login.html">Login</a></li>
                  </ul>
                </li>
                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
              </ul>
              <div id="search" class="input-group">
                <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg">
                <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                </span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-3 col-xs-3 header-left">
        <div id="logo"> <a href="index.html"><img src="{{asset('client/assets/image/logo.png')}}" title="E-Commerce" alt="E-Commerce" class="img-responsive"></a> </div>
      </div>
      <div class="col-sm-9 col-xs-9 header-right">
        <nav id="menu" class="navbar main-menu">
          <div class="nav-inner">
            <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
              <button type="button" class="btn btn-navbar navbar-toggle"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse pull-left">
              <ul class="main-navigation">
                <li class="home_first"><a href="/" class="parent">Home</a> </li>
                <li><a href="category.html" class="parent">Collection</a> </li>
                <li><a href="#" class="active parent">Categories</a>
                  <ul>
                    @foreach($categories as $cat)
                    <li><a href="/category/{{$cat->id}}">{{$cat->name}}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li><a href="blog.html" class="parent">Blog</a></li>
                <li><a href="about-us.html">About us</a></li>
                <li class="last-menu"><a href="contact.html">Contact Us</a> </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"> <a href="/cart"></a><span>Shopping Cart</span><br>
         {{Cart::count()}} items</span></button>
        </div>
      </div>
    </div>
  </div>
</header>
@yield('content')
<div class="footer-top-cms parallax-container">
  <!-- <div class="parallax"><img src="{{asset('client/assets/image/news.jpg')}}" alt="#"></div> -->
  <div class="container">
    <div class="row">
      <div class="newslatter">
        <form>
          <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
          <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!</h4>
          <div class="input-group">
            <input type="text" class=" form-control" placeholder="Your-email@website.com">
            <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="footer-social">
        <ul>
          <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <h3 class="client-title">Favourite Brands</h3>
  <h4 class="title-subline">The High Quality Products</h4>
  <div id="brand_carouse" class="owl-carousel brand-logo">
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand1.png')}}" alt="Disney" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand2.png')}}" alt="Dell" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand3.png')}}" alt="Harley" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand4.png')}}" alt="Canon" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand5.png')}}" alt="Canon" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand6.png')}}" alt="Canon" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand7.png')}}" alt="Canon" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand8.png')}}" alt="Canon" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand9.png')}}" alt="Canon" class="img-responsive" /></a> </div>
    <div class="item text-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand5.png')}}" alt="Canon" class="img-responsive" /></a> </div>
  </div>
</div>
<footer>
  <div class="cms_searvice">
    <div class="container">
      <div class="row">
        <div class="col-md-3 ">
          <div class="cms-block1 z-depth-5">
            <h4>Free Shipping</h4>
            <p>All order over $150</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block2">
            <h4>30 Days Returns</h4>
            <p>Money Back Guarantee</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block3">
            <h4>24/7 Support</h4>
            <p>Feel free to Contact us</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block4">
            <h4>Online Shopping </h4>
            <p>Save Up to 70% on Store</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">INFORMATION</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="contact.html">About Us</a></li>
          <li><a href="#">Delivery Information</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Wish List</a></li>
          <li><a href="#">Gift Certificates</a></li>
          <li><a href="#">View Cart</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Specials</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">MY ACCOUNT</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wish List</a></li>
          <li><a href="#">Newsletter</a></li>
          <li><a href="#">Gift Certificates</a></li>
          <li><a href="#">Brands</a></li>
          <li><a href="#">Specials</a></li>
          <li><a href="#">Affiliates</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">Extras</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="#">Delivery information</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Sitemap</a></li>
          <li><a href="#">Product Recall</a></li>
          <li><a href="#">Gift Vouchers</a></li>
          <li><a href="#">Help & FAQs</a></li>
          <li><a href="#">Sale Only Today</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <div class="content_footercms_right">
          <div class="footer-contact">
            <h5 class="contact-title footer-title">Contact Us</h5>
            <ul class="ul-wrapper">
              <li><i class="fa fa-map-marker"></i><span class="location2">Offices Addresss:<br>
                218,Drimlend Building<br>
                Sarthana jakatnaka, Surat City <br>
                Gujarat-395013  INDIA</span></li>
              <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">info@localhost.com</a><br>
                <a href="#">your@domain.com</a></span></li>
              <li><i class="fa fa-mobile"></i><span class="phone2">+91 0987-654-321<br>
                +91 0987-654-321</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div id="bottom-footer">
      <ul class="footer-link">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="copyright"> Copyright - <a class="yourstore" href="http://www.lionode.com/"> Created by Lionode &copy; 2017 </a></div>
      <div class="footer-bottom-cms">
        <div class="footer-payment">
          <ul>
            <li class="mastero"><a href="#"><img alt="" src="image/payment/mastero.jpg"></a></li>
            <li class="visa"><a href="#"><img alt="" src="image/payment/visa.jpg"></a></li>
            <li class="currus"><a href="#"><img alt="" src="image/payment/currus.jpg"></a></li>
            <li class="discover"><a href="#"><img alt="" src="image/payment/discover.jpg"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <a id="scrollup">Scroll</a> </footer>
<script src="{{asset('./client/assetsjavascript/jquery.parallax.js')}}"></script> 
<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>
</body>
</html>

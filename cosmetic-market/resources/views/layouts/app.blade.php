<!DOCTYPE html>
<html lang="en">

<head>
    <title>HD Market</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="e-commerce site well design with responsive view." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="image/favicon.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href="{{asset('client/assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" /> -->
    <link href="{{asset('client/assets/javascript/font-awesome/css/font-awesome.css')}}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link href="{{asset('client/assets/css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet"
        media="screen" />
    <link href="{{asset('client/assets/javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet"
        media="screen" />

</head>

<body class="index">
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="display:flex;justify-content:space-between;">
                        <div class="top-left float-xs-left">
                            <div class="wel-come-msg"> Welcome to HD market! </div>
                            <div class="language">
                                <form action="#" method="post" enctype="multipart/form-data" id="language">
                                    <div class="btn-group">
                                        <button class="btn btn-link dropdown-toggle" style="margin-top:3px"
                                            data-toggle="dropdown" aria-expanded="false"> English <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Arabic</a></li>
                                            <li><a href="#"> English</a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="top-right float-xs-right" style="display:flex;align-items:center">
                            <div id="top-links" class="nav float-xs-right">
                                @if(Auth::user())
                                <ul class="list-inline" style="display:inherit">
                                    <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle"
                                            data-toggle="dropdown"><i class="fa fa-user"
                                                aria-hidden="true"></i><span>{{Auth::user()->username}}</span> <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="/profile">Your profile</a></li>
                                            <li><a href="/order">Your Order</a></li>
                                            <li><a href="/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"
                                                aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
                                </ul>
                                @else
                                <li class="nav-item" style="border-right: 1px solid rgba(255, 255, 255, 0.2);">
                                    <a class="nav-link" href="/login">
                                        Log in
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">
                                        Register
                                    </a>
                                </li>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 header-left" id="logoHeader">
                    <div id="logo"> <a id="aLogo" href="/"><img src="{{asset('client/assets/image/logo.png')}}"
                                title="E-Commerce" alt="E-Commerce" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-9 header-right" id="right-side">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-2">
                            <div class="row" id="row-search">
                                <input type="text" name="search" value="" placeholder="Enter your keyword ..."
                                    class="form-control" id="search-content">
                                <button type="button" class="btn btn-primary"><span>Search</span></button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div id="cart" class="btn-group btn-block" style="width:auto">
                                <button type="button" class="btn btn-inverse btn-block btn-lg">
                                    <a href="/cart">
                                        <span id="cart-total" style="color:#ff8f00">
                                            <span id="span-cart">Shopping Cart</span><br>
                                            {{Cart::content()->count()}} item</span>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <ul class="nav" style="background-color:#fff;justify-content:space-evenly">
        <li class="nav-item active">
            <a href="/" class="nav-link">HOME</a>
        </li>
        <li class="nav-item">
            <a href="category.html" class="nav-link">COLLECTION</a>
        </li>
        <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link">Categories</a>
                    <ul>
                                @foreach($categories as $cat)
                                <li><a href="/category/{{$cat->id}}">{{$cat->name}}</a></li>
                                @endforeach
                            </ul>
                </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                CATEGORIES
            </a>
            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($categories as $cat)
                <a class="dropdown-item" href="/category/{{$cat->id}}">{{$cat->name}}</a>
                @endforeach
            </div> -->
            <div class="dropdown-menu" id="main-menu" aria-labelledby="navbarDropdown" style="text-transform:uppercase; font-size:13px">
                @foreach($categories as $key => $category)
                <div class="dropright" onclick="hoverFunction({{$key}})" onmouseleave="hoverOut({{$key}})">
                    <a href="#" class="dropdown-item">{{$category->name}}</a>
                    <div class="sub-menu-content dropdown-menu" >
                        @foreach($category->subcategory as $submenu)
                        <a class="dropdown-item" href="/category/{{$submenu->id}}" style="text-transform:uppercase; font-size:13px">{{$submenu->name}}</a>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </li>
        <li class="nav-item">
            <a href="about-us.html" class="nav-link">ABOUT US</a>
        </li>
        <li class="nav-item">
            <a href="contact.html" class="nav-link">CONTACT US</a>
        </li>
    </ul>
    @yield('content')
    <div class="footer-top-cms parallax-container">
        <div class="container">
            <div class="row">
                <div class="newslatter col-8">
                    <form>
                        <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
                        <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!
                        </h4>
                        <div class="row">
                            <input type="text" class=" form-control col-9" placeholder="Your-email@website.com">
                            <div class=" col-3">
                                <a type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="footer-social col-4">
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
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand1.png')}}"
                        alt="Disney" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand2.png')}}"
                        alt="Dell" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand3.png')}}"
                        alt="Harley" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand4.png')}}"
                        alt="Canon" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand5.png')}}"
                        alt="Canon" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand6.png')}}"
                        alt="Canon" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand7.png')}}"
                        alt="Canon" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand8.png')}}"
                        alt="Canon" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand9.png')}}"
                        alt="Canon" class="img-fluid" /></a> </div>
            <div class="item text-xs-center"> <a href="#"><img src="{{asset('client/assets/image/brand/brand5.png')}}"
                        alt="Canon" class="img-fluid" /></a> </div>
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
                                        Gujarat-395013 INDIA</span></li>
                                <li><i class="fa fa-envelope"></i><span class="mail2"><a
                                            href="#">info@localhost.com</a><br>
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
                <div class="copyright"> Copyright - <a class="yourstore" href="http://www.lionode.com/"> Created by
                        Lionode &copy; 2017 </a></div>
                <div class="footer-bottom-cms">
                    <div class="footer-payment">
                        <ul>
                            <!-- <li class="mastero"><a href="#"><img alt="" src="image/payment/mastero.jpg"></a></li>
                            <li class="visa"><a href="#"><img alt="" src="image/payment/visa.jpg"></a></li>
                            <li class="currus"><a href="#"><img alt="" src="image/payment/currus.jpg"></a></li>
                            <li class="discover"><a href="#"><img alt="" src="image/payment/discover.jpg"></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a id="scrollup">Scroll</a>
    </footer>
    <!-- <script src="{{asset('client/assets/javascript/jquery.parallax.js')}}"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5e880e5035bcbb0c9aada3bf/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    <!--End of Tawk.to Script-->
    <!-- <script>
        jQuery(document).ready(function ($) {
            $('.parallax').parallax();
        });

    </script> -->
    <script>
        let menuSubAll = document.querySelectorAll(".sub-menu-content");

        function hoverFunction(index) {
            document.getElementById('main-menu').style.display="block";
            menuSubAll.forEach((ele, i) => {
                if (index === i) {
                    ele.classList.add('show_menu');
                }
            })
        }

        function hoverOut(index) {
            menuSubAll.forEach((ele, i) => {
                setTimeout(() => {

                ele.classList.remove('show_menu');
                },300)
            })

        }

    </script>
    @stack('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cosmetic Exchange</title>
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

<body class="index" >
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="display:flex;justify-content:space-between;">
                        <div class="top-left float-xs-left">
                            <div class="wel-come-msg"> Welcome to our cosmetic exchange! </div>
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
                                            <li><a href="/history">Your History</a></li>
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
                <div class="col-lg-2 header-left" id="logoHeader">
                    <div id="logo"> <a id="aLogo" href="/"><img src="{{asset('client/assets/image/logo.png')}}"
                                title="E-Commerce" alt="E-Commerce" style="width:50%" class="img-fluid"></a>
                        <p class="text-center">Cosmetic Exchange</p>
                    </div>
                </div>
                <div class="col-lg-10 header-right" id="right-side">
                    <div class="row">
                            <form action="" method="GET" class="form-group form-inline col-sm-6 offset-sm-2 bmd-form-group" id="search">
                            @csrf   
                                <input type="text" name="search" value="{{ request()->search }}" placeholder="Enter your keyword ..."
                                    class="form-control" id="search-content">
                                <button class="btn btn-primary" style="padding: 6px 15px; border-radius:5px"><span>Search</span></button>
                            
                        </form>

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
    <ul class="nav" style="background-color:#fff;justify-content:space-evenly;padding: 0 15%;">
        <li class="nav-item active">
            <a href="/" class="nav-link">HOME</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">COLLECTION</a>
        </li>
        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" onclick="changeStatus()">
                CATEGORIES
            </a>
            <div class="dropdown-menu"  id="main-menu" aria-labelledby="navbarDropdown"
                style="text-transform:uppercase; font-size:13px">
                @foreach($categories as $key => $category)
                <div class="dropright" onclick="hoverFunction({{$key}})" onmouseleave="hoverOut({{$key}})">
                    <a href="#" class="dropdown-item">{{$category->name}}</a>
                    <div class="sub-menu-content dropdown-menu">
                        @foreach($category->subcategory as $submenu)
                        <a class="dropdown-item" href="/category/{{$submenu->id}}"
                            style="text-transform:uppercase; font-size:13px">{{$submenu->name}}</a>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </li>
        <li class="nav-item">
            <a href="#contact-us" class="nav-link">CONTACT US</a>
        </li>
    </ul>
    @yield('content')
    @if(session()->has("success"))
    <div class="alert alert-warning alert-dismissible fade show "
        style="width:20%; height:20%; position: fixed; top: 40%; left:40%; opacity:0.9; background-color: #ccc; border-color:#ccc;   box-shadow: 1px 1px 1px 2px #ccc;  ">
        <button type="button" aria-hidden="true" class="close p-0" data-dismiss="alert" style=" top: 6px;
    right: 8px;" aria-label="Close">
            <i class="far fa-times-circle" style="color:#111"></i>
        </button>
        <p style="margin-top:25px; color:#111" class="text-center"> {{ session("success")}}</p>
        @endif
    </div>
    <div class="container">
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
        <div class="cms_searvice" >
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
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 footer-block">
                    <h5 class="footer-title">Cosmetic Infomation</h5>
                    <iframe width="400" height="250" src="https://www.youtube.com/embed/pfq000AF1i8" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-sm-3 footer-block">
                    <div class="content_footercms_right">
                        <div class="footer-contact">
                            <h5 class="contact-title footer-title" id="contact-us">Contact Us</h5>
                            <ul class="ul-wrapper d-block">
                                <li><i class="fa fa-map-marker"></i><span class="location2">Offices Addresss:<br>
                                        218,Dream Building<br>
                                        Hanoi City <br>
                                        Vietnam</span></li>
                                <li><i class="fa fa-envelope"></i><span class="mail2"><a
                                            href="#">hienp9237@@gmail.com</a><br>
                                        <a href="#">hienktpm1@gmail.com</a></span></li>
                                <li><i class="fa fa-mobile"></i><span class="phone2">+08 357 625 111 </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5 class="footer-title">Facebook Page</h5>
                    <div class="fb-page"
                        data-href="https://www.facebook.com/Cosmetic-Trading-Floor-101549541589507/?modal=admin_todo_tour"
                        data-tabs="timeline" data-width="400" data-height="250" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote
                            cite="https://www.facebook.com/Cosmetic-Trading-Floor-101549541589507/?modal=admin_todo_tour"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Cosmetic-Trading-Floor-101549541589507/?modal=admin_todo_tour">Cosmetic
                                Trading Floor</a></blockquote>
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
                        HienPT19 &copy; 2020 </a></div>
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
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0">
    </script>
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
        let main = document.getElementById('main-menu');
        function hoverFunction(index) {
            main.style.display = "block";
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
                }, 500)
            })
        }
        function hide(){
            document.getElementById('main-menu').style.display = "none";
        }

        function changeStatus(){
            console.log(main.style.display)
            if(main.style.display == "none"){
                main.style.display = "block"
            }else{
                main.style.display = "none"
            }
        }
    </script>
    @stack('scripts')
</body>

</html>

@extends('layouts.app')
@section('content')

<div class="container">
    <div class="cms_searvice">
        <div class="row">
            <div class="col-md-4 ">
                <div class="cms-block1">
                    <h4>Free Shipping &amp; Return</h4>
                    <p>All Order Over $ 338</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="cms-block3">
                    <h4>Online Support 24/7</h4>
                    <p>All Question All Time</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="cms-block2">
                    <h4>Online Shopping</h4>
                    <p>Save Up to 70% on Store</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mainbanner">
        <div id="main-banner" class="owl-carousel home-slider owl-theme" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer">
                <div class="owl-wrapper"
                    style="width: 7020px; left: 0px; display: block; transform: translate3d(0px, 0px, 0px); transform-origin: 585px center; perspective-origin: 585px center;">
                    <div class="owl-item" style="width: 1170px;">
                        <div class="item"> <a href="#"><img src="{{asset('client/assets/image/banner7.jpg')}}"
                                    alt="main-banner1" class="img-responsive"></a> </div>
                    </div>
                    <!-- <div class="owl-item" style="width: 1170px;">
                        <div class="item"> <a href="#"><img src="image/banners/Main-Banner2.jpg" alt="main-banner2"
                                    class="img-responsive"></a> </div>
                    </div>
                    <div class="owl-item" style="width: 1170px;">
                        <div class="item"> <a href="#"><img src="image/banners/Main-Banner3.jpg" alt="main-banner3"
                                    class="img-responsive"></a> </div>
                    </div> -->
                </div>
            </div>


            <!-- <div class="owl-controls clickable" style="display: block;">
                <div class="owl-pagination">
                    <div class="owl-page active"><span class=""></span></div>
                    <div class="owl-page"><span class=""></span></div>
                    <div class="owl-page"><span class=""></span></div>
                </div>
                <div class="owl-buttons">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="row">
        <div class="cms-banner-left">
            <div class="col-xs-12 col-md-4">
                <div class="banner sub-hover">
                    <a href="#"><img src="{{asset('client/assets/image/banner2.jpg')}}" alt="Sub Banner2"
                            class="img-responsive"></a>
                    <div class="bannertext">
                        <!-- <h2>wooden </h2>
                    <p>From Top Brands</p> -->
                        <button class="btn">Shop Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cms-banner-right">
            <div class="col-xs-12 col-md-4">
                <div class="banner sub-hover">
                    <a href="#"><img src="{{asset('client/assets/image/banner1.jpg')}}" alt="Sub Banner2"
                            class="img-responsive"></a>
                    <div class="bannertext">
                        <!-- <h2>wooden </h2>
                    <p>From Top Brands</p> -->
                        <button class="btn">Shop Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cms-banner-right">
            <div class="col-xs-12 col-md-4">
                <div class="banner sub-hover">
                    <a href="#"><img src="{{asset('client/assets/image/banner3.jpg')}}" alt="Sub Banner2"
                            class="img-responsive"></a>
                    <div class="bannertext">
                        <!-- <h2>wooden </h2>
                    <p>From Top Brands</p> -->
                        <button class="btn">Shop Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="center">
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">List product</h3>
                    <!-- <div id="tabs" class="customtab-wrapper">
                        <ul class='customtab-inner'>
                            <li class='tab'><a href="#tab-furnitur">Popular</a></li>
                            <li class='tab'><a href="#tab-livin">Best Sellers</a></li>
                            <li class='tab'><a href="#tab-kitche">Specials</a></li>
                            <li class='tab'><a href="#tab-outdoo">New product</a></li>
                        </ul>
                    </div> -->
                </div>
                <!-- tab-furniture-->
                <div id="tab-furnitur" class="tab-content">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img
                                                src="{{$product->image}}" alt="iPod Classic" title="iPod Classic"
                                                class="img-responsive" /> <img src="{{$product->image}}"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
                                            <li>
                                                <a class="wishlist " data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wish List"><i class="fa fa-heart-o"></i></a>
                                            </li>
                                            <li>
                                                <a class="compare " data-toggle="tooltip" data-placement="top"
                                                    title="Compare this Product"><i class="fa fa-exchange"></i></a>
                                            </li>
                                            <li>
                                                <a class="quick-view " data-toggle="tooltip" data-placement="top"
                                                    title="Quick View" href="/product-detail/{{$product->id}}"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                        </ul>
                                        <div class="add">

                                            <a class="addtocart-btn" href="/add-to-cart/{{$product->id}}"
                                                title="Add to Cart"> Add to
                                                Cart </a>
                                        </div>
                                    </div>
                                    <div class="caption product-detail mt-4">
                                        <!-- <div class="rating"> <span class="fa fa-stack"><i
                                                    class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i
                                                    class="fa fa-star fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div> -->
                                        @if($product->sale != 0)
                                        <h4 class="product-name mt-4"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">{{$product->name}}</a></h4>
                                                
                                        <del class="lineThrough">{{$product->price}} vnd </del>
                                        &nbsp; &nbsp; &nbsp;<b class="price product-price">{{$product->price - $product->price* $product->sale/100}} vnd</b>
                                        @else
                                        <h4 class="product-name mt-4"><a href="#" title="Casual Shirt With Ruffle Hem">
                                                {{$product->name}}</a></h4>
                                        
                                                <b class="price product-price">$ {{$product->price}}</b>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $products->links() }}
                    <!-- <div class="viewmore">
                        <div class="btn">View More All Products</div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container">
  <div class="row">
    <div class="content col-sm-12">
      <div class="customtab">
        <h3 class="productblock-title">Featured Products</h3>
        <h4 class="title-subline">What’s so special? Check it out!</h4>
      </div>
      <div id="tab-furniture" class="tab-content">
          <div id="special-slidertab" class="row owl-carousel product-slider">
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product2-2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  <ul class="button-group">
                    <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                    </li>
                  </ul>
                </div>
                <div class="caption product-detail">
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product3-3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  <ul class="button-group">
                    <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                    </li>
                  </ul>
                </div>
                <div class="caption product-detail">
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product4-4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  <ul class="button-group">
                    <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                    </li>
                  </ul>
                </div>
                <div class="caption product-detail">
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product5-5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  <ul class="button-group">
                    <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                    </li>
                  </ul>
                </div>
                <div class="caption product-detail">
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product6-6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  <ul class="button-group">
                    <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                    </li>
                  </ul>
                </div>
                <div class="caption product-detail">
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-thumb">
                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product7-7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                  <ul class="button-group">
                    <li>
                      <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    </li>
                    <li>
                      <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </li>
                    <li>
                      <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                    </li>
                    <li>
                      <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                    </li>
                  </ul>
                </div>
                <div class="caption product-detail">
                  <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                  <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>  -->
@endsection

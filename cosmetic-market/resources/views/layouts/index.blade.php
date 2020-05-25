@extends('layouts.app')
@section('content')

<div class="container">
    <div class="cms_searvice mb-5">
        <div class="row">
            <div class="col-lg-4 ">
                <div class="cms-block1">
                    <h4>Free Shipping &amp; Return</h4>
                    <p>All Order Over $ 338</p>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="cms-block3">
                    <h4>Online Support 24/7</h4>
                    <p>All Question All Time</p>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="cms-block2">
                    <h4>Online Shopping</h4>
                    <p>Save Up to 70% on Store</p>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="mainbanner">
        <a href="#"><img src="{{asset('client/assets/image/banner7.jpg')}}" alt="main-banner1" class="img-fluid"></a>
    </div> -->
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="banner sub-hover">
                <a href="#"><img src="{{asset('client/assets/image/banner2.jpg')}}" alt="Sub Banner2"
                        class="img-fluid"></a>
                <div class="bannertext">
                    <!-- <h2>wooden </h2>
                    <p>From Top Brands</p> -->
                    <button class="btn">Shop Now</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="banner sub-hover">
                <a href="#"><img src="{{asset('client/assets/image/banner1.jpg')}}" alt="Sub Banner2"
                        class="img-fluid"></a>
                <div class="bannertext">
                    <!-- <h2>wooden </h2>
                    <p>From Top Brands</p> -->
                    <button class="btn">Shop Now</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="banner sub-hover">
                <a href="#"><img src="{{asset('client/assets/image/banner3.jpg')}}" alt="Sub Banner2"
                        class="img-fluid"></a>
                <div class="bannertext">
                    <!-- <h2>wooden </h2>
                    <p>From Top Brands</p> -->
                    <button class="btn">Shop Now</button>
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
                </div>
                <!-- tab-furniture-->
                <div id="tab-furnitur" class="tab-content">
                    <div class="row">
                        @foreach($collection as $products)
                        @foreach($products as $product)
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a> <img
                                                src="{{$product->pivot->image}}" alt="iPod Classic" title="iPod Classic"
                                                class="img-fluid" /></a>
                                    </div>
                                     <ul class="button-group" style="display:block">
                                            <li>
                                                <a class="wishlist " data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wish List"><i class="far fa-heart"></i></a>
                                            </li>
                                            <li>
                                                <a class="compare " data-toggle="tooltip" data-placement="top"
                                                    title="Compare this Product"><i class="fas fa-exchange-alt"></i></a>
                                            </li>
                                            <li>
                                                <a class="quick-view " data-toggle="tooltip" data-placement="top"
                                                    title="Quick View" href="/product-detail/{{$product->pivot->product_id}}"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                            <li>
                                              <button class="addtocart-btn" style="margin-top:1rem"><a
                                                    href="/add-to-cart/{{$product->pivot->saler_id}}/{{$product->pivot->product_id}}" title="Add to Cart"> Add to
                                                    Cart </a></button>

                                            </li>
                                        </ul>
                                    <div class="caption product-detail" style="margin-bottom: 10px; ">
                                        @if($product->pivot->discount != 0)
                                        <h4 class="product-name mt-4"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">{{$product->pivot->name}}</a></h4>

                                        <del class="lineThrough fz-2">${{$product->pivot->unit_price}}</del>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b
                                            class="price product-price fz-3">${{$product->pivot->unit_price - $product->pivot->unit_price* $product->pivot->discount/100}}
                                        </b>
                                        @else
                                        <h4 class="product-name mt-4"><a href="#" title="Casual Shirt With Ruffle Hem">
                                                {{$product->pivot->name}}</a></h4>

                                        <b class="price product-price fz-3"> ${{$product->pivot->unit_price}}</b>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

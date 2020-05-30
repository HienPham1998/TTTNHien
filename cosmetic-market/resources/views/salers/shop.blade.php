@extends('layouts.app')
@section('content')

<div style=" background-repeat: no-repeat; background-position: center; background-size: cover; background-image:url('https://image.freepik.com/free-photo/cosmetic-make-up-flat-lay-white-background-copyspace-text-beauty-graphic-content_71163-525.jpg'); ">
<div class="shop-info" style="width:40%; margin:0 auto; padding: 50px 0; color: #111; font-weight: bold; font-size: 17px">
<p><i class="fas fa-file-signature"></i> Owner Shop: {{$saler-> firstname}} {{$saler->lastname}}</p>
<p><i class="fab fa-stripe-s"></i> Shop name: {{$saler->shopname}}</p>
<p><i class="fas fa-store-alt"></i> Address: {{$saler->shopaddress}}</p>
<p><i class="fas fa-mobile-alt"></i> Phone: {{$saler->phone}}</p>
</div>
</div>
<div id="center">
    <div class="container">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">List product</h3>
                </div>
                <div id="tab-furnitur" class="tab-content">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a> <img
                                                src="{{$product->image}}" alt="iPod Classic" title="iPod Classic"
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
                                                    title="Quick View" href="/product-detail/{{$product->id}}"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                            <li>
                                              <button class="addtocart-btn" style="margin-top:1rem"><a
                                                    href="/add-to-cart/{{$product->id}}" title="Add to Cart"> Add to
                                                    Cart </a></button>

                                            </li>
                                        </ul>
                                    <div class="caption product-detail" style="margin-bottom: 10px; ">
                                        @if($product->discount != 0)
                                        <h4 class="product-name mt-4"><a href="#"
                                                title="Casual Shirt With Ruffle Hem">{{$product->name}}</a></h4>

                                        <del class="lineThrough fz-2">${{$product->unit_price}}</del>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b
                                            class="price product-price fz-3">${{$product->unit_price - $product->unit_price* $product->discount/100}}
                                        </b>
                                        @else
                                        <h4 class="product-name mt-4"><a href="#" title="Casual Shirt With Ruffle Hem">
                                                {{$product->name}}</a></h4>

                                        <b class="price product-price fz-3"> ${{$product->unit_price}}</b>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

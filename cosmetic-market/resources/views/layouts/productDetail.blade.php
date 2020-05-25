@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="content col-sm-12" style="margin-top:100px">
            <div class="row">
                <div class="col-sm-5">
                    <div class="thumbnails">
                        <div><a class="thumbnail fancybox" href="image/product/product8.jpg" title="{{$p->name}}">
                                <img class="img-fluid" src="{{$product->pivot->image}}" title="Casual Shirt With Ruffle Hem"
                                    alt="iPod Classic" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 prodetail">
                    <h1 class="productpage-title">{{$p->name}}</h1>
                    <div class="rating"> <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-2x"></i>
                            <i class="fa fa-star fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i>
                            <i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i>
                            <i class="fa fa-star fa-stack-2x"></i></span>
                        <span class="fa fa-stack">
                            <i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="riview"><a href="#">1 reviews</a> / <a href="#">Write a review</a></span> </div>
                    <ul class="list-unstyled productinfo-details-top">
                        <li>
                            <label>Price: </label> ${{$product->pivot->unit_price}}
                        </li>
                        <li><label>Sale: </label>{{$product->pivot->discount}}%</span></li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled product_info">
                        <li>
                            <label>Product Category:</label>
                            <span>{{$p->category->name}}</span>
                        </li>
                        <li>
                            <label>Availability:</label>
                            <span>{{$product->pivot->quantity}}</span></li>
                    </ul>
                    <hr>
            <p class="product-desc">{{$product->pivot->description}}</p>
                    <div id="product">
                        <div class="form-group">
                            <div class="qty">
                                <label>Qty</label>
                                <input id="qty" placeholder="1" type="number">
                                <ul class="button-group list-btn">
                                    <li>
                                        <button type="button" class="wishlist">
                                            <a data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i
                                                    class="fa fa-heart-o"></i></a>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button">
                                            <a href="/add-to-cart/{{$product->pivot->saler_id}}/{{$product->pivot->product_id}}" data-toggle="tooltip"
                                                data-placement="top" title="Add to Cart"><i
                                                    class="fa fa-shopping-bag"></i>
                                            </a>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <a data-toggle="tooltip" data-placement="top"
                                                title="Compare this Product"><i class="fa fa-exchange"></i></a>
                                        </button type="button" class="compare">

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productinfo-tab">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                    <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-description">
                        <p class="product-desc">Description: {{$product->pivot->description}}</p>
                        <p class="product-desc"> Ingredient: {{$product->pivot->ingredient}}</p>
                        <p class="product-desc"> Manufacturing date:{{$product->pivot->manufacturing_date}}</p>
                        <p class="product-desc">Expiry date: {{$product->pivot->expiry_date}}</p>
                        <!-- cpt_container_end -->
                    </div>
                    <div class="tab-pane" id="tab-review">
                        <form class="">
                            <div id="review"></div>
                            <h2>Write a review</h2>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="form-control-label" for="input-name">Your Name</label>
                                    <input type="text" name="name" value="" id="input-name" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="form-control-label" for="input-review">Your Review</label>
                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    <div class="form-text"><span class="text-danger">Note:</span> HTML is not
                                        translated!</div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="form-control-label">Rating</label>
                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                    <input type="radio" name="rating" value="1" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="2" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="3" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="4" />
                                    &nbsp;
                                    <input type="radio" name="rating" value="5" />
                                    &nbsp;Good</div>
                            </div>
                            <div class="buttons clearfix">
                                <div class="float-xs-right">
                                    <button type="button" id="button-review" data-loading-text="Loading..."
                                        class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="content col-sm-12" style="margin-top:100px">
            <div class="row">
                <div class="col-sm-5">
                    <div class="thumbnails">
                        <div><a class="thumbnail fancybox" href="image/product/product8.jpg" title="{{$product->name}}">
                                <img class="img-fluid" src="{{$product->image}}" title="Casual Shirt With Ruffle Hem"
                                    alt="iPod Classic" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 prodetail">
                    <h1 class="productpage-title">{{$product->name}}</h1>
                    <ul class="list-unstyled productinfo-details-top">
                        <li>
                            <label>Price: </label> ${{$product->unit_price}}
                        </li>
                        <li><label>Sale: </label>{{$product->discount}}%</span></li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled product_info">
                        <li>
                            <label>Product Category:</label>
                            <span>{{$product->category->name}}</span>
                        </li>
                        <li>
                            <label>Availability:</label>
                            <span>{{$product->quantity}}</span></li>
                    </ul>
                    <hr>
                    <p class="product-desc">{{$product->description}}</p>
                    <hr>
                    <label>shop:</label>
                    <span>
                    <a href="/go-to-shop/{{$product->saler->id}}">
                        {{$product->saler->shopname}}
                    </a>
                    </span>
                    <hr>
                    <button class="btn btn-primary ">
                        <a href="/add-to-cart/{{$product->id}}" data-toggle="tooltip" data-placement="top"
                            title="Add to Cart">Add to cart
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="productinfo-tab">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="#tab-description"
                        data-toggle="tab">Description</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab-review" data-toggle="tab">Reviews</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-description">
                    <p class="product-desc">Description: {{$product->description}}</p>
                    <p class="product-desc"> Ingredient: {{$product->ingredient}}</p>
                    <p class="product-desc"> Manufacturing date:{{$product->manufacturing_date}}</p>
                    <p class="product-desc">Expiry date: {{$product->expiry_date}}</p>

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
                                <div class="form-text"><span class="text-danger">
                                </div>
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

@push('scripts')

@endpush

@extends('layouts.app')
@section('content')
<div class="container">
    @if(Cart::count() != 0)
    <div class="col-sm-12" style="padding-top:80px" id="content">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-xs-center">Image</td>
                            <td class="text-xs-left">Product Name</td>
                            <td class="text-xs-left">Model</td>
                            <td class="text-xs-left">Quantity</td>
                            <td class="text-xs-right">Price</td>
                            <td class="text-xs-right">Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="text-xs-center"><a href="#"><img class="img-thumbnail" style="width:100px"
                                        alt="iPhone" src="{{$product->options->image}}"></a></td>
                            <td class="text-xs-left"><a href="#">{{$product->name}}</a></td>
                            <td class="text-xs-left">{{$product->options->cat_name}}</td>
                            <td class="text-xs-left">
                                <div style="max-width: 200px;" class="input-group d-flex">
                                    <form style="display:flex" action="update-cart/{{$product->rowId}}" method="get">
                                    @csrf
                                        <input type="text" class="form-control quantity" size="1"
                                            value="{{$product->qty}}" name="quantity">
                                        <button class="btn btn-primary" title="" data-toggle="tooltip" type="submit"
                                                data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                    </form>

                                    <form action="remove-from-cart/{{$product->rowId}}" method="get"
                                        class="form-inline">
                                        @csrf
                                        <button class="btn btn-danger" type="submit" title="" data-toggle="tooltip"
                                            data-original-title="Remove"><i class="fa fa-times-circle"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            @if($product->price != $product->options->promotion_price)
                            <td class="text-xs-right">
                                <del class="lineThrough">${{$product->price}} </del>
                                &nbsp; &nbsp; &nbsp;${{$product->options->promotion_price}}
                            </td>
                            @else
                            <td class="text-xs-right">
                                &nbsp; &nbsp; &nbsp;${{$product->price}}
                            </td>
                            @endif
                            <td class="text-xs-right">
                                ${{$product->options->promotion_price * $product->qty}}  </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        <br>
        <div class="row">
            <div class="col-sm-4 offset-sm-8">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right">{{$total}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Shipping fee</strong></td>
                            <td class="text-right">$2</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right">${{$total + 2 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="buttons">
            <div class="float-left"><a class="btn btn-secondary" href="/">Continue Shopping</a></div>
            @if(Auth::user())
            <div class="float-right btn btn-secondary" data-toggle="modal" data-target="#myModal">Check out</div>
            @else
            <div class="float-right btn btn-secondary" data-toggle="modal" data-target="#ModalLogin">Check out</div>
            @endif
        </div>
    </div>
    @else
    <h3 class="text-xs-center">No item in your cart</h3>
    @endif
</div>
<!-- Modal infocustomer -->
<div class="modal" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <form action="addAddress" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Add the shipping address</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label>Name </label>
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Address">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal-login -->
<div class="modal" id="ModalLogin" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Please log in Or register <a href="/register" style="color:red">here</a></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="/login" class="btn btn-primary">Login now</a>
            </div>

        </div>

    </div>
</div>
@endsection

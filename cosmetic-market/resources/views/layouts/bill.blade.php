@extends('layouts.app')
@section('content')
<!-- Bill -->
<div class="container mt-2">
    <div id="address" class="bill-card mt-3">
        <h2><i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng:</h2>
        {{$shippingaddress->name}}
        {{$shippingaddress->phone}}
        {{$shippingaddress->address}}
        <p style="float:right;cursor:pointer">THAY ĐỔI</p>
    </div>
    <div class="table-responsive bill-card">
        <table class="table table-borderless" id="bill-product">
            <thead>
                <tr>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Model</td>
                    <td class="text-right">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="text-left">{{$product->name}}</td>
                    <td class="text-left">{{$product->options->cat_name}}</td>
                    <td class="text-right">{{$product->qty}}</td>
                    @if($product->price != $product->options->promotion_price)
                    <td class="text-right">
                        <del class="lineThrough">${{$product->price}} </del>
                        &nbsp; &nbsp; &nbsp;${{$product->options->promotion_price}}
                    </td>
                    @else
                    <td class="text-right">
                        &nbsp; &nbsp; &nbsp;${{$product->price}}
                    </td>
                    @endif
                    <td class="text-right">
                        ${{$product->options->promotion_price  * $product->qty}}
                        </td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                    <td class="text-right">{{$total}}</td>
                </tr>
                <tr>
                    <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                    <td class="text-right">$2</td>
                </tr>
                <tr>
                    <td class="text-right" colspan="4"><strong>Total:</strong></td>
                    <td class="text-right">${{$total + 2 }}</td>
                </tr>
                <tr>
                    <td>
                        <div class="row" style="align-items:center">
                            <label class="ml-3 mr-2">Massage:</label>
                            <input type="text" placeholder="Lưu ý cho người bán..." class="form-control"
                                style="width:70%" />
                        </div>
                    </td>
                    <td>Transport unit: Low Price Transport</td>
                    <td>Fast delivery: None</td>
                    <td>Change</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="bill-card mt-2">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Voucher</th>
                    <th></th>
                    <th scope="col">THAY ĐỔI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Xu</td>
                    <td>Dùng 17700 Xu</td>
                </tr>
                <tr>
                    <td>Phương thức thanh toán:</td>
                    <td>Thanh toán khi nhận hàng</td>
                </tr>
                <tr>
                    <td>Thanh toán khi nhận hàng</td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="buttons">
        <div class="pull-right">
        <form class="form" method="POST" action="/order">
                        @csrf
            <button  data-loading-text="Loading..." class="btn btn-primary" id="button-confirm">Confirm Order</button>
                </form>
        </div>
    </div>

    <!-- <div class="row pt-3">
        <div class="col-9"></div>
        <div class="col-3">Total amout:<p class="text-right">$ {{\Cart::subTotal() + 2}}</p>
        </div>

    </div> -->

</div>
<div class="container">

</div>

</div>

@endsection

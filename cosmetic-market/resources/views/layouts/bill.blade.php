@extends('layouts.app')
@section('content')
<!-- Bill -->
<div class="container mt-2">
    <div id="address" class="bill-card mt-3">
        <h2><i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng:</h2>
        <span>{{$shippingaddress->name}}</span>
        <span>{{$shippingaddress->email}}</span>
        <span>{{$shippingaddress->phone}}</span>
        <span>{{$shippingaddress->address}}</span>
        <p class="changeAddress" style="float:right;cursor:pointer">THAY ĐỔI</p>
        <div class="modal" id="editModal" role="dialog" aria-labelledby="editModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <form id="editForm" method="POST" enctype="multipart/form-data"
                    action="/address/update/{{$shippingaddress->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Update Address
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-user">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Name...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Email...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" class="form-control"
                                                            placeholder="Phone...">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="address" class="form-control"
                                                            placeholder="Address...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="background-color:#5cb85c">Update</button>
                            <button type="button" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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
                    <td class="text-right">
                    @foreach($products as $prod)
                    <span>{{$prod->options->transport->price}}</span>
                    @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="text-right" colspan="4"><strong>Total:</strong></td>
                    <td class="text-right">
                    @foreach($products as $prod)
                    <span>${{$total + $prod->options->transport->price}}</span>
                    @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row" style="align-items:center">
                            <label class="ml-3 mr-2">Massage:</label>
                            <input type="text" placeholder="Lưu ý cho người bán..." class="form-control"
                                style="width:70%" />
                        </div>
                    </td>
                    <td>
                    @foreach($products as $prod)
                    <span>Transport Unit: {{$prod->options->transport->name}}</span>
                    <div class="modal" id="updateAddress" role="dialog" aria-labelledby="editModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <form id="updateForm" method="get" enctype="multipart/form-data"
                    action="/update-transport/{{$prod->rowId}}">
                    {{ csrf_field() }}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Update Transport
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            @foreach($transport as $key => $tp)
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group form-check">
                                                        <input type="radio" name="check" value="{{$key+1}}" class="form-check-input">
                                                        <label class="form-check-label">{{$tp->name}}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <span>${{$tp->price}}</span>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="background-color:#5cb85c">Update</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                    @endforeach
                    </td>
                    <td>Fast delivery: None</td>
                    <td class="address" style="cursor:pointer">CHANGE</td>
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
                <button data-loading-text="Loading..." class="btn btn-primary" id="button-confirm">Confirm
                    Order</button>
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

@push('scripts')
<script>
    // Click edit button
    $('.changeAddress').click(function (e) {
        // Fill default value
        var row = $(this).parent().parent().parent();
        var col = row.find('span');
        console.log(row);
        console.log(col);
        $('#editForm input[name="name"]').val(col[8].innerText.trim());
        $('#editForm input[name="email"]').val(col[9].innerText);
        $('#editForm input[name="phone"]').val(col[10].innerText);
        $('#editForm input[name="address"]').val(col[11].innerText);
        // $('#editForm select[name="role_id"]').val($(col[4]).get(0).innerText === "User" ? 2 : 1);

        $('#editModal').modal({
            backdrop: 'static',
            show: true
        });
    });

    $('.address').click(function (e) {
        e.preventDefault();
        // Fill default value
        $('#updateAddress').modal({
            backdrop: 'static',
            show: true
        });
    });

</script>
@endpush

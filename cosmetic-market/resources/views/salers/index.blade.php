@extends('salers.app')
@section('content')
<div class="main-content" id="panel">
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                @if(session()->has("success"))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <span> {{ session("success") }}</span>
                </div>
                @endif
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Manage Products</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button type="button" class="btn btn-sm btn-neutral" data-target="#addingProduct"
                            data-toggle="modal">New</button>
                        <div class="modal fade" id="addingProduct" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form id="addForm" method="POST" enctype="multipart/form-data" action="/profile/index">
                                    {{ csrf_field() }}
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Add Product</h5>
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
                                                                        <input type="text" name="name"
                                                                            class="form-control"
                                                                            placeholder="Name product...">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Image</label>
                                                                        <input type="file" name="image"
                                                                            class="form-control"
                                                                            placeholder="Image of product...">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Category</label>
                                                                        <select class="form-control" name="category_id">
                                                                            @foreach($categories as $cate)
                                                                            <option value="{{$cate->id}}">
                                                                                {{$cate->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Discount</label>
                                                                        <input type="text" name="discount"
                                                                            class="form-control"
                                                                            placeholder="Discount...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Price</label>
                                                                        <input type="text" name="unit_price"
                                                                            class="form-control"
                                                                            placeholder="Unit price...">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Quantity</label>
                                                                        <input type="text" name="quantity"
                                                                            class="form-control"
                                                                            placeholder="Quantity...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Ingredient</label>
                                                                        <input type="text" name="ingredient"
                                                                            class="form-control"
                                                                            placeholder="Ingredient...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Manufacturing Date</label>
                                                                        <input type="text" name="manu_date"
                                                                            class="form-control"
                                                                            placeholder="Manufacturing Date...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Expiry Date</label>
                                                                        <input type="text" name="expiry"
                                                                            class="form-control"
                                                                            placeholder="Expiry Date...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Description</label>
                                                                        <input type="text" name="description"
                                                                            class="form-control"
                                                                            placeholder="Description...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Product table</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" data-sort="name">Id</th>
                                    <th scope="col" data-sort="budget">Image</th>
                                    <th scope="col" data-sort="status">Name</th>
                                    <th scope="col" data-sort="status">Category</th>
                                    <th scope="col" data-sort="status">Discount</th>
                                    <th scope="col" data-sort="status">Price</th>
                                    <th scope="col" data-sort="status">Quantity</th>
                                    <th scope="col" data-sort="status">Ingredient</th>
                                    <th scope="col" data-sort="status">Mf Date</th>
                                    <th scope="col" data-sort="status">Exp Date</th>
                                    <th scope="col" data-sort="status">Description</th>
                                    <th scope="col" data-sort="status" style="text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($product as $key => $prod)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{ $prod->id }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="avatar-group">
                                            <img class="avatar avatar-sm rounded-circle" src="{{$prod->image}}" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <p class="shorten-text">{{$prod->name }}</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <!-- <i class="bg-warning"></i> -->
                                            <span class="status">{{$prod->category->name }}</span>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->discount }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->unit_price }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->quantity }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->ingredient }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->manufacturing_date }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->expiry_date }}
                                        </div>
                                    </td>

                                    <td>
                                        <div class="avatar-group">
                                            <p class="shorten-text">{{ $prod->description }}</p>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-warning edit" data-toggle="modal"
                                            data-target="#edit{{$prod->id}}">Edit</button>
                                        <button data-target="#modalDelete{{$prod->id}}" type="button"
                                            class="btn btn-danger" data-toggle="modal">Delete
                                        </button>
                                        <div class="modal fade" id="edit{{$prod->id}}" role="dialog"
                                            aria-labelledby="editModalLabel">
                                            <div class="modal-dialog">
                                                <form id="editForm" method="post" enctype="multipart/form-data"
                                                    action="/profile/update/{{ $prod->id }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Update Product
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
                                                                                        <input type="text" name="name"
                                                                                            class="form-control"
                                                                                            placeholder="Name product...">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Image</label>
                                                                                        <input type="file" name="image"
                                                                                            class="form-control"
                                                                                            placeholder="Image of product...">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Category</label>
                                                                                        <select class="form-control"
                                                                                            name="category_id">
                                                                                            @foreach($categories as
                                                                                            $cate)
                                                                                            <option
                                                                                                value="{{$cate->id}}">
                                                                                                {{$cate->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="exampleInputEmail1">Discount</label>
                                                                                        <input type="text"
                                                                                            name="discount"
                                                                                            class="form-control"
                                                                                            placeholder="Discount...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Price</label>
                                                                                        <input type="text"
                                                                                            name="unit_price"
                                                                                            class="form-control"
                                                                                            placeholder="Price...">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Quantity</label>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class="form-control"
                                                                                            placeholder="Quantity...">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Ingredient</label>
                                                                                        <input type="text"
                                                                                            name="ingredient"
                                                                                            class="form-control"
                                                                                            placeholder="Ingredient...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Manufacturing
                                                                                            Date</label>
                                                                                        <input type="text"
                                                                                            name="manu_date"
                                                                                            class="form-control"
                                                                                            placeholder="Manufacturing Date...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Expiry Date</label>
                                                                                        <input type="text" name="expiry"
                                                                                            class="form-control"
                                                                                            placeholder="Expiry Date...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Description</label>
                                                                                        <input type="text"
                                                                                            name="description"
                                                                                            class="form-control"
                                                                                            placeholder="Description...">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                        <div id="modalDelete{{$prod->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Delete</h4>
                                                        <button type="button" class="close" data-dismiss="modal"><span
                                                                aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="text-align:left">Are you sure to delete?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="/profile/destroy/{{ $prod->id }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Cancel
                                                            </button>
                                                            <button type="submit" class="btn btn-danger">Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$product->links()}}
                </div>
            </div>
        </div>
        <!-- Dark table -->


    </div>
</div>


@endsection

@push('scripts')
<script>
    // Click edit button
    $('.edit').click(function (e) {
        e.preventDefault();
        // Fill default value
        var row = $(this).parent().parent();
        var col = row.find('td');
        console.log(row);
        console.log(col);
        let selectValue = col[2].innerText;
        console.log(selectValue);
        console.log($("#editForm select[name='category_id'] option:contains('"+selectValue+"')").prop('selected',true))
        $('#editForm input[name="name"]').val(col[1].innerText.trim());
        $("select option:contains('"+selectValue+"')").prop('selected',true);
        $('#editForm input[name="discount"]').val(col[3].innerText);
        $('#editForm input[name="unit_price"]').val(col[4].innerText);
        $('#editForm input[name="quantity"]').val(col[5].innerText);
        $('#editForm input[name="ingredient"]').val(col[6].innerText);
        $('#editForm input[name="manu_date"]').val(col[7].innerText);
        $('#editForm input[name="expiry"]').val(col[8].innerText);
        $('#editForm input[name="description"]').val(col[9].innerText);

        $('#edit').modal({
            backdrop: 'static',
            show: true
        });
    });

    $('.add').click(function (e) {
        e.preventDefault();
        // Fill default value
        $('#addModal').modal({
            backdrop: 'static',
            show: true
        });
    });

</script>
@endpush

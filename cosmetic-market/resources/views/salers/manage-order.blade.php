@extends('salers.app');
@section('content')
<div class="main-content" id="panel">
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                @if(session()->has("success"))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span> {{ session("success") }}</span>
                </div>
                @endif
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral add">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
                        <h3 class="mb-0">Light table</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" data-sort="name">Id</th>
                                    <th scope="col" data-sort="budget">Image</th>
                                    <th scope="col" data-sort="status">Name</th>
                                    <th scope="col" data-sort="status">Price</th>
                                    <th scope="col" data-sort="status">Quantity</th>
                                    <th scope="col" data-sort="status">Username</th>
                                    <th scope="col" data-sort="status">Email</th>
                                    <th scope="col" data-sort="status">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listData as $key => $prod)
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
                                            <img class="avatar avatar-sm rounded-circle" src="{{$prod->product->image}}"
                                                alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <p class="shorten-text">{{$prod->product->name }}</p>
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
                                            {{ $prod->bill->user->username }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->bill->user->email }}
                                        </div>
                                    </td>
                                    <td style="display:flex;align-items:center">
                                        @if($prod->status == 1)
                                        <form action="/profile/approve/{{$prod->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button disabled class="btn btn-success">Approve</button>
                                        </form>
                                        <form action="/profile/reject/{{$prod->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button disabled data-target="#modalDelete{{$prod->id}}" type="submit"
                                                class="btn btn-primary" data-toggle="modal">Reject</button>
                                        </form>
                                        <i class="far fa-check-circle" style="font-size:25px;color:green"></i>
                                        @elseif($prod->status == 0)
                                        <form action="/profile/approve/{{$prod->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button class="btn btn-success">Approve</button>
                                        </form>
                                        <form action="/profile/reject/{{$prod->id}}" method="POST">
                                            <button data-target="#modalDelete" type="button"
                                                class="btn btn-primary" data-toggle="modal">Reject</button>
                                        </form>
                                        <div id="modalDelete" class="modal fade" role="dialog">
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
                                                        <form action="/profile/reject/{{$prod->id}}" method="post">
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
                                        @else
                                        <form action="/profile/approve/{{$prod->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <button disabled class="btn btn-success">Approve</button>
                                        </form>
                                        <form action="/profile/reject/{{$prod->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button disabled data-target="#modalDelete{{$prod->id}}" type="submit"
                                                class="btn btn-primary" data-toggle="modal">Reject</button>
                                        </form>
                                        <i class="far fa-times-circle" style="font-size:25px;color:red"></i>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table -->


    </div>
</div>
@endsection

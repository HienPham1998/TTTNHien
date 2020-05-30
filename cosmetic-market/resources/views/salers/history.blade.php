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
                        <h6 class="h2 text-white d-inline-block mb-0">History</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/profile/history">History</a></li>
                            </ol>
                        </nav>
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
                        <h3 class="mb-0">History Saled</h3>
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
                                    <th scope="col" data-sort="status">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{count($listData)}}
                                @if(count($listData) != 0)
                                @foreach($listData as $key => $prod)
                                @if($prod->status == 1)
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
                                            ${{ $prod->unit_price }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{ $prod->quantity }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group">
                                            {{$prod->created_at}}
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @else
                                <p>None product is saled</p>
                                @endif
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

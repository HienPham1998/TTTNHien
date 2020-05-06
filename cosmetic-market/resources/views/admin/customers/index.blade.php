@extends('admin.app')
@section('content')
  <div class="main-content" id="panel">
    <!-- Topnav -->

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
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
              <a href="#" class="btn btn-sm btn-neutral">New</a>
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
                    <th scope="col" data-sort="budget">Name</th>
                    <th scope="col" data-sort="status">Password</th>
                    <th scope="col" data-sort="status">Remember Token</th>
                    <th scope="col" data-sort="status" style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach($customers as $key => $customer)
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">

                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $customer->id }}</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      {{$customer->firstname }}
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <!-- <i class="bg-warning"></i> -->
                        <span class="status">{{$customer->lastname }}</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        {{ $customer->email }}
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        {{ $customer->phone }}
                      </div>
                    </td>
                    <td class="text-right">
                        <button data-href="manage/customers/update/{{ $customer->id }}" id="edit" class="btn btn-warning">Edit</button>
                        <button data-target="#modalDelete{{$customer->id}}" type="button" class="btn btn-danger" data-toggle="modal">Delete</button>
                      <!-- <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>

                      </div> -->
                      <div id="modalDelete{{$customer->id}}" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete</h4>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal"><span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p style="text-align:left">Are you sure to delete?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="/manage/customers/destroy/{{ $customer->id }}"
                                                                      method="post">
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
                {{ $customers->links() }}
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->


    </div>
  </div>

  <div class="modal" id="editModal" role="dialog" aria-labelledby="editModalLabel" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <form id="editForm" method="POST" enctype="multipart/form-data" action="/manage/customers/update/{{ $customer->id }}">
            {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Update User</h5>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-user">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Firstname</label>
                                                    <input type="text" name="firstname" class="form-control" placeholder="Username">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Lastname</label>
                                                    <input type="text" name="lastname" class="form-control" placeholder="Username">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="Username">
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
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Click edit button
        $('#edit').click(function (e) {
            e.preventDefault();
            // Fill default value
            var row = $(this).parent().parent().parent();
            var col = row.find('td');
            console.log(row);
            console.log(col);
            $('#editForm input[name="firstname"]').val(col[0].innerText.trim());
            $('#editForm input[name="lastname"]').val(col[1].innerText.trim());
            $('#editForm input[name="email"]').val(col[2].innerText);
            $('#editForm input[name="phone"]').val(col[3].innerText);
            // $('#editForm select[name="role_id"]').val($(col[4]).get(0).innerText === "User" ? 2 : 1);

            $('#editModal').modal({
                backdrop: 'static',
                show: true
            });
        });
    </script>
@endpush
